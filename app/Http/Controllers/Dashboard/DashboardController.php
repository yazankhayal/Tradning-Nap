<?php

namespace App\Http\Controllers\Dashboard;

use App\ContactUS;
use App\Language;
use App\Newsletter;
use App\Post;
use App\Products;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Cookie;

class DashboardController extends Controller
{
    public function index()
    {
        $s = Products::count();
        $s1 = Post::count();
        $s2 = ContactUS::count();
        $s4 = Newsletter::count();
        return view('dashboard.index',compact('s','s1','s2','s4'));
    }

    public function dashboard_sidebar_mini(Request $request)
    {
        $body = $request->body;
        if($body == "true"){
            Cookie::queue(cookie('sidebar_collapse', "sidebar-collapse", $minute = 1440));
        }
        else{
            Cookie::queue(Cookie::forget('sidebar_collapse'));
        }
        return response()->json(['success' => parent::CurrentLangShow()->Save_Theme, 'dashboard' => '1']);
    }


    public function dashboard_sidebar_color(Request $request)
    {
        $body = $request->color;
        $co = "navbar-".$body;
        Cookie::queue(cookie('sidebar_color', $co, $minute = 1440));
        return response()->json(['success' => parent::CurrentLangShow()->Save_Theme, 'dashboard' => '1']);
    }


    public function send_email()
    {
        return view('dashboard.send_email');
    }

    public function send_email_send(Request $request)
    {
        $email_cout = count(explode(",",$request->email));
        $validation = Validator::make($request->all(), $this->rules($email_cout));
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        } else {

            
            if ($request->newsletter == "on") {
                if(Newsletter::count() != 0){
                    foreach(Newsletter::get() as $item){
                        
                        parent::send_Email_template($request->name_temp,$item->email,$item->email,$request->summary);
                    }
                }
            }

            if ($request->contact_us == "on") {
                if(ContactUS::count() != 0){
                    foreach(ContactUS::get() as $item){
                       
                        parent::send_Email_template($request->name_temp,$item->f_name,$item->email,$request->summary);
                    }
                }
            }

if(count(explode(",",$request->email)) != 0){
                foreach (explode(",",$request->email) as $item){
                    
                    parent::send_Email_template($request->name_temp, $item, $item, $request->summary);
                }
            }

            return response()->json(['success' => parent::CurrentLangShow()->Send_Email, 'dashboard' => '1']);
        }
    }


    private function rules($edit = null)
    {
        $x = [
            'name' => 'required|string|min:1',
            'name_temp' => 'required|string|min:1',
            'email' => 'required|email|string|min:1',
            'summary' => 'required|string|min:1',
        ];
        if ($edit >= 2) {
            $x['email'] = 'required|string|min:1';
            $x['name'] = 'nullable|string|min:1';
        }
        return $x;
    }

    public function languages()
    {
        return response()->json(['data' => Language::get()]);
    }

    public function languages_exption_em()
    {
        return response()->json(['data' => Language::where('select', '!=', '1')->get()]);
    }

    public function newsletter()
    {
        return response()->json([Newsletter::get()]);
    }

}
