<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addmin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){

        $data = addmin::where(['email'=>$req->email])->first();
        if(!$data || Hash::check($req->password,$data->password)){
            return "email or password is wrong";
        }
        else{
            $req->session()->put('addmin',$data);
            return redirect('/');
        }
    }
}
