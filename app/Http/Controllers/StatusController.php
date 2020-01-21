<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('name');
        $status = DB::table('products')
                ->where('status','ສີນຄ້າຮອດສາງລາວ')
                ->where("pro_name","LIKE","%{$name}%")
                 ->get();
        return response()->json($status);
    }

    public function list_update(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('name');
        $status = DB::table('products')
                //->where('status','ກໍາລັງສັ່ງ')
                ->where("pro_name","LIKE","%{$name}%")
                 ->get();
        return response()->json($status);
    }

    public function update_pro_status(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

        $data = array();
        $id = $request->input('id');
        $data['price_old'] = $request->price_old;
        $data['price_sale'] = $request->price_sale;
        $data['delivery_price'] = $request->delivery_price;
        $data['number'] = $request->number;
        $data['status'] = $request->status;

        if($data == null){
            return response()->json('error');
        }else{
            DB::table('products')
              ->where("id",$id)
              ->update($data);
            return response()->json('success');
        }
    }

    public function update_status_order(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

        $data = array();
        $cus_id = $request->input('cus_id');
        $data['status'] = $request->status;

        if($data == null){
            return response()->json('error');
        }else{
            DB::table('order')
              ->where("cus_id",$cus_id)
              ->update($data);
            return response()->json('success');
        }
    }
}
