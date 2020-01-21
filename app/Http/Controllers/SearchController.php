<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;
use DateTime;

class SearchController extends Controller
{
    public function user_search(Request $request)
    {
    $name = $request->input('name');
    $listOrder = DB::table('order')
                ->join('customer','customer.id','=','order.cus_id')
                ->join('products','products.id','=','order.pro_id')
                ->select('cus_id','name','customer.cus_image','date_order','order.status','customer.phone','customer.address')
                ->groupBy('cus_id','name','customer.cus_image','date_order','order.status','customer.phone','customer.address')
                ->where("name","LIKE","%{$name}%")
                ->orwhere("phone","LIKE","%{$name}%")
                //->orWhere("date_order", "LIKE","%{$name}%")
                ->get();

                return view('search', compact('listOrder'))->with('i',0);

         
        

    }
}
