<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;

class CustomerController extends Controller
{

    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $listPro = DB::table('customer')
                 ->get();
        return response()->json($listPro);
    }

    public function search(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('name');
        $listPro = DB::table('customer')
                 ->where("name","LIKE","%{$name}%")
                 ->orwhere("phone","LIKE","%{$name}%")
                 ->get();
        return response()->json($listPro);
    }

    public function add_customer(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;

        $image = $request->file('cus_image');

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'img/cus/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            $data['cus_image'] = $image_url;
        }

        if($data == null){
            return response()->json(['status' => 'error']);
        }else{
            DB::table('customer')->insert($data);
            return response()->json(['status' => 'success']);
        }

    }
}
