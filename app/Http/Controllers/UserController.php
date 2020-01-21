<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;
use Session;
session_start();

class UserController extends Controller
{
    public function logout(){
    	Session::flush();
    	return response()->json(['status' => 'success']);
    }

    public function AdminAuthCheck(){
    	$id = Session::get('id');
    	if($id){
    		return;
    	}else{
    		return Redirect::to('/admin')->send();
    	}
    }

    public function user_login(Request $request)
    {
        $name = $request->name;
        $password = md5($request->password);
        $result=DB::table('users')
                ->where('name', $name)
                ->where('password', $password)
                ->first();
                
                if ($result) {
                    Session::put('name', $result->name);
                    Session::put('id', $result->id);
                    return response()->json(['status' => 'success']);
                }else {
                    return response()->json(['status' => 'error']);
                }
    }

    public function add_user(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['password'] = md5($request->password);
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;

        if($data == null){
            return response()->json(['status' => 'error']);
        }else{
            DB::table('users')->insert($data);
            return response()->json(['status' => 'success']);
        }
        
    }
}
