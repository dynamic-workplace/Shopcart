<?php

namespace App\Http\Controllers\Admin\Product\Mobile;

use App\Models\Admin\Products\Mobile\MobileBrand;
use App\Models\Admin\Products\Mobile\MobileDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array();
        $categories = MobileBrand::where('name', 'like', $_GET['term'].'%')->get();

        foreach($categories as $category)
        {
            array_push($result, $category->name);
        }

        return json_encode($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = MobileBrand::where('name',$request->input('name'))->first();

        //$test = json_decode($request->all(),true);

        if($brand == '')
        {
            $brand = MobileBrand::create($request->only('name'));
        }

        $details = MobileDetail::create(array_merge($request->except('name'),['mobile_brand_id'=>$brand->id, 'product_id'=>strtoupper(uniqid($brand->name.'_'))]));

        return redirect()->route('admin.product.new');




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
    public function destroy($id)
    {
        //
    }
}
