<?php

namespace App\Http\Controllers\Dashboard;

use App\Contents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index(){
        return view('dashboard/about.index');
    }

    public function get_data_by_id(Request $request){
        $items = Contents::where('type','=','about')->first();
        return response()->json(['success'=>$items]);
    }

    public function post_data(Request $request){
        $about = Contents::where('type','=','about')->first();
        $validation = Validator::make($request->all(), $this->rules($about),$this->languags());
        if ($validation->fails())
        {
            return response()->json(['errors'=>$validation->errors()]);
        }
        else{
            if($about == null){
                DB::transaction(function()
                {
                    $about = new Contents();
                    $about->type = 'about';
                    $about->link = Input::get('link');
                    $about->summary = Input::get('summary');
                    $about->avatar1 = parent::upladImage(Input::file('avatar1'),'about');
                    $about->language_id = parent::GetIdLangEn()->id;
                    $about->user_id = parent::CurrentID();
                    $about->save();
                    if( !$about )
                    {
                        return response()->json(['error'=> __('language.msg.e')]);
                    }
                });
                return response()->json(['success'=> __('language.msg.s'),'same_page'=>'1','dashboard'=>'1']);
            }
            else{
                DB::transaction(function()
                {
                    $about = Contents::where('type','=','about')->first();
                    $about->link = Input::get('link');
                    $about->summary = Input::get('summary');
                    if(Input::hasFile('avatar1')){
                        //Remove Old
                        if($about->avatar1 != 'upload/about/no.png'){
                            if(file_exists(public_path($about->avatar1))){
                                unlink(public_path($about->avatar1));
                            }
                        }
                        //Save avatar1
                        $about->avatar1 = parent::upladImage(Input::file('avatar1'),'about');
                    }
                    $about->update();
                    if( !$about )
                    {
                        return response()->json(['error'=> __('language.msg.e')]);
                    }
                });
                return response()->json(['success'=>__('language.msg.m'),'same_page'=>'1','dashboard'=>'1']);
            }
        }
    }

    private function rules($edit = null,$pass = null){
        $x= [
            'summary' => 'required|string',
            'link' => 'required|string',
            'avatar1' => 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG',
        ];
        if($edit != null){
            $x['id'] ='required|integer|min:1';
            $x['avatar1'] ='nullable|mimes:png,jpg,jpeg,PNG,JPG,JPEG';
        }
        return $x;
    }

    private function languags(){
        if(app()->getLocale() == "ar"){
            return [
                'link.required' => '?????? ???????????? ??????????.',
                'video.required' => '?????? ?????????????? ??????????.',
                'link.required' => '?????? ?????????? ??????????.',
                'name.required' => '?????? ?????????? ??????????.',
                'name.regex' => '?????? ?????????? ?????? ???????? .',
                'name.min' => '?????? ?????????? ?????????? ?????? ?????????? 3 ???????? .',
                'name.max' => '?????? ?????????? ?????????? ?????? ???????????? 191 ??????  .',
                'sub_name.required' => '?????? ?????????? ?????????????? ??????????.',
                'sub_name.regex' => '?????? ?????????? ?????????????? ?????? ???????? .',
                'sub_name.min' => '?????? ?????????? ?????????????? ?????????? ?????? ?????????? 3 ???????? .',
                'sub_name.max' => '?????? ?????????? ?????????????? ?????????? ?????? ???????????? 191 ??????  .',
                'avatar1.required' => '?????? ???????????? ???????????? ??????????.',
                'avatar2.required' => '?????? ???????????? ?????????????? ??????????.',
                'avatar3.required' => '?????? ???????????? ?????????????? ??????????.',
                'avatar4.required' => '?????? ???????????? ?????????????? ??????????.',
                'dir.required' => '?????? ?????? ???????? ??????????.',
            ];
        }
        else{
            return [];
        }
    }

}
