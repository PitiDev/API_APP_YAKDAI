<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $listPro = DB::table('products')
                 ->get();
        return response()->json($listPro);
    }

    public function search(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $name = $request->input('name');
        $listPro = DB::table('products')
                 ->where("pro_name","LIKE","%{$name}%")
                 ->get();
        return response()->json($listPro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        $data = array();
        $data['pro_name'] = $request->pro_name;
        $data['type_pro'] = $request->type_pro;
        $data['number'] = $request->number;
        $data['price_old'] = $request->price_old;
        $data['price_sale'] = $request->price_sale;
        $data['delivery_price'] = $request->delivery_price;
        $data['address'] = $request->address;
        $data['status'] = 'ກໍາລັງສັ່ງ';
        $data['detail'] = $request->detail;

        $image = $request->file('image');

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'img/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            $data['image'] = $image_url;
        }

        if($data == null){
            return response()->json(['status' => 'error']);
        }else{
            DB::table('products')->insert($data);
            return response()->json(['status' => 'success']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        DB::table('products')
            ->where('id', $id)
            ->delete();

        if($id == null){
            return response()->json(['status' => 'Delete Product Error']);
        }else{
            return response()->json(['status' => 'Delete Product Success']);
        }
    }
}
