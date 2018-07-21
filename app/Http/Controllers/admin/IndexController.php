<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\CommonController;
use App\Http\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Validator;

class IndexController extends CommonController
{
    public function index(){
        return view('admin.index');
    }

    public function info(){
        return view('admin.info');
    }

    public function pass(){
        if ($input = Input::all()){
            $rules = [
                'password' => 'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required' => '新密碼不能為空',
                'password.between' => '新密碼必須在6到20位之間！！',
                'password.confirmed' => '新密碼和確認密碼不一致！！'
            ];

            $validator = Validator::make($input, $rules, $message);

            if(!$validator->fails()){
                $user = Users::first();
                $password = Crypt::decrypt($user->user_password);
                if($input['password_o'] == $password){
                    $user->user_password = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors', '密碼修改成功！！');
                }
                else{
                    return back()->withErrors('原密碼錯誤');
                }
            }
            else{
                return back()->withErrors($validator);
            }
        }
        else{
            return view('admin.pass');
        }
    }
}
