<?php

namespace App\Http\Controllers;

use App\Contents;
use App\ContactUS;
use App\Gallery;
use App\Language;
use App\Products;
use App\HPContactUS;
use App\Newsletter;
use App\Post;
use App\ProductsTranslate;
use App\Testimonials;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Mail;
use Cookie;

class HomepageController extends Controller
{

    public function index(Request $request)
    {
        $address = Contents::orderby('id', 'desc')->where("type", "faq")->get();
        $slider = Contents::orderby('id', 'desc')->where("type", "slider")->get();
        $services = Contents::orderby('id', 'desc')->where("type", "services")->get();
        $blog = Post::orderby('id', 'desc')->where("type", "1")->where("featured", "1")->get();
        $Testimonials = Testimonials::orderby('id', 'desc')->get();
        $gallery = Gallery::orderby('id', 'desc')->get();
        $about = Contents::orderby('id', 'desc')->where("type", "about")->first();
        $special = Contents::orderby('id', 'desc')->where("type", "special")->first();
        $fact = Contents::orderby('id', 'desc')->where("type", "fact")->first();
        return view('index', compact('Testimonials', 'address', 'slider', 'about', 'blog', 'gallery', 'special', 'fact', 'services'));
    }

    public function about(Request $request)
    {
        $about = Contents::orderby('id', 'desc')->where("type", "about")->first();
        $address = Contents::orderby('id', 'desc')->where("type", "faq")->get();
        $fact = Contents::orderby('id', 'desc')->where("type", "fact")->first();
        $gallery = Gallery::orderby('id', 'desc')->get();
        $Testimonials = Testimonials::orderby('id', 'desc')->get();
        return view('about', compact('about', 'address', 'gallery', 'Testimonials', 'fact'));
    }
    public function change_language($lang = 'en')
    {
        Session::put('local', $lang);
        //session()->push('local',$lang);
        return redirect()->back();
    }

    public function services(Request $request)
    {
        $items = new Products();
        $items = $items->orderby('created_at', 'desc');
        if ($request->q != null) {
            $items = $items->where('name', 'like', "%" . $request->q . "%");
        }
        $items = $items->paginate(6);
        return view('services', compact('items'));
    }

    public function blog(Request $request)
    {
        $items = Post::orderby('created_at', 'desc')->where("type", 1);
        if ($request->q != null) {
            $items = $items->where('name', 'like', "%" . $request->q . "%");
        }
        if ($request->tags != null) {
            $items = $items->where('tags', 'like', "%" . $request->tags . "%");
        }
        $items = $items->paginate(6);
        if ($request->ajax()) {
            return view('data/blog', compact('items'));
        }
        return view('blog', compact('items'));
    }

    public function post($id = null, $name = null)
    {
        $item = Post::where([
            'id' => $id,
            'name' => $name
        ])->first();
        if ($item == null) {
            return redirect()->to('/');
        } else {
            return view('post', compact('item'));
        }
    }

    public function service($id = null, $name = null)
    {
        $item = Products::where([
            'id' => $id,
            'name' => $name
        ])->first();
        if ($item == null) {
            return redirect()->to('/');
        } else {
            return view('service', compact('item'));
        }
    }

    public function newsletter(Request $request)
    {
        $email = $request->email;
        $validation = Validator::make($request->all(), $this->newsletter_rules($email));
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        } else {
            $save = new Newsletter();
            $save->email = $email;
            $save->save();
            return response()->json(['success' => parent::CurrentLangHomeShow()->send_newsletter, 'dashboard' => '0']);
        }
    }

    private function newsletter_rules($edit)
    {
        $x = [
            'email' => 'required|string|email|unique:newsletter,email,' . $edit,
        ];
        return $x;
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function contact_post(Request $request)
    {
        $validation = Validator::make($request->all(), $this->contact_post_rules());
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        } else {
            $save = new ContactUS();
            $save->email = $request->email;
            $save->phone = $request->phone;
            $save->f_name = $request->f_name;
            $save->l_name = $request->l_name;
            $save->summary = $request->summary;
            $save->save();
            return response()->json(['success' => parent::CurrentLangHomeShow()->send_contact, 'dashboard' => '0']);
        }
    }

    private function contact_post_rules()
    {
        $x = [
            'email' => 'required|string|email',
            'f_name' => 'required|min:3|regex:/^[ا-يa-zA-Z0-9]/',
            'l_name' => 'required|min:3|regex:/^[ا-يa-zA-Z0-9]/',
            'summary' => 'required|min:3|regex:/^[ا-يa-zA-Z0-9]/',
            'phone' => 'required|numeric',
        ];
        return $x;
    }

}
