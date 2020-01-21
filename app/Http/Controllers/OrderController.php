<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;
use DateTime;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        //header('Access-Control-Allow-Origin: *');
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
        return response()->json($listOrder);
    }

    public function user_search(Request $request)
    {
        //header('Access-Control-Allow-Origin: *');

        try{
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
            
            return response()->json($listOrder);
        }catch(\Exception $e){
            return response()->json(['status' => 'error']);
        }
        
        // if($name == null){
        //     return response()->json(['status' => 'error']);
        // }else{
        //     return response()->json($listOrder);
        // }
    }

    public function order_detail(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('name');
        $listOrder = DB::table('order')
                 ->join('customer','customer.id','=','order.cus_id')
                 ->join('products','products.id','=','order.pro_id')
                 ->where("cus_id","LIKE","%{$name}%")
                 ->where('order.status_price',0)
                  ->get();
        $sum_price = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("cus_id","LIKE","%{$name}%")
                  ->where('order.status_price',0)
                  ->sum('price_sale');
        $sum_price_delivery = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("cus_id","LIKE","%{$name}%")
                  ->where('order.status_price',0)
                  ->sum('delivery_price');
        $total = $sum_price+$sum_price_delivery;

        return response()->json(['listOrder' => $listOrder,'sum_price'=>$sum_price,'sum_price_delivery'=>$sum_price_delivery,'total'=>$total]);
    }

    public function order_detail_price(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('cus_id');
        $sum_price = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("cus_id","LIKE","%{$name}%")
                  ->where('order.status_price',0)
                  ->sum('price_sale');
        $sum_price_delivery = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("cus_id","LIKE","%{$name}%")
                  ->where('order.status_price',0)
                  ->sum('delivery_price');
        $total = $sum_price+$sum_price_delivery;
        return response()->json(['sum_price'=>$sum_price,'sum_price_delivery'=>$sum_price_delivery,'total'=>$total]);
    }

    public function add_order(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

        $dt = new DateTime();
        $date = $dt->format('d-m-Y');

        $data = array();
        $data['cus_id'] = $request->cus_id;
        $data['pro_id'] = $request->pro_id;
        $data['number'] = $request->number;
        $data['pro_size'] = $request->pro_size;
        $data['detail'] = $request->detail;
        $data['date_order'] = $date;
        $data['status'] = 'ກໍາລັງສັ່ງ';
        $data['status_price'] = 0;

        if($data == null){
            return response()->json(['status' => 'error']);
        }else{
            DB::table('order')->insert($data);
            return response()->json(['status' => 'success']);
        }

    }

    public function order_success(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

        $dt = new DateTime();
        $date = $dt->format('d-m-Y');
        
        $cus_id = $request->input('cus_id');

        //Insert Data Order Payment
        $sum_price = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("order.cus_id",$cus_id)
                  ->where('order.status_price',0)
                  ->sum('price_sale');
        $sum_price_delivery = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("order.cus_id",$cus_id)
                  ->where('order.status_price',0)
                  ->sum('delivery_price');
        $sum_order_number = DB::table('order')
                  ->join('customer','customer.id','=','order.cus_id')
                  ->join('products','products.id','=','order.pro_id')
                  ->where("order.cus_id",$cus_id)
                  ->where('order.status_price',0)
                  ->sum('order.number');
        $total = $sum_price+$sum_price_delivery;

        $data_order = array();
        $data_order['cus_id'] = $cus_id;
        $data_order['number'] = $sum_order_number;
        $data_order['total_price'] = $total;

        //return response()->json(['$data_order' => $data_order,'sum_price'=>$sum_price,'sum_price_delivery'=>$sum_price_delivery,'$total'=>$total,'$cus_id'=>$cus_id]);
          DB::table('order_payment')->insert($data_order);

        //Update Order Status
        $data = array();
        $data['status'] = 'ຮັບເຄື່ອງແລ້ວ';
        $data['status_price'] = 1;
        $data['update_date'] = $date;

        DB::table('order')
        ->where('cus_id', $cus_id)
        ->update($data);

          return response()->json(['success'=> $data_order]);
    }

    public function destroy(Request $request)
    {
        $id = $request->input('cus_id');
        DB::table('order')
            ->where('cus_id', $id)
            ->delete();

        if($id == null){
            return response()->json(['status' => 'Delete Order Error']);
        }else{
            return response()->json(['status' => 'Delete Order Success']);
        }
    }
}
