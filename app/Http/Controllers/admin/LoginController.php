<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

require_once 'org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login(){
        $code = new \Code();
        $_code = $code->get();

        if($input = Input::all()){
            if(strtoupper($input['code']) != $_code){
                return back()->with('msg', '驗證碼錯誤');
            }
            $user = Users::first();
            if ($user->user_name != $input['username'] || Crypt::decrypt($user->user_password) != $input['userpassword']){
                return back()->with('msg', '用戶名或密碼錯誤');
            }

            \session(['user' => $user]);

            return redirect('admin/index');
        }
        else{
            return view('admin.login');
        }
    }

    public function code(){
        $code = new \Code();
        $code->make();
    }

    public function quit(){
        \session(['user' => null]);

        return redirect('admin/quit');
    }
}
