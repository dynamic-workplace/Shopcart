<?php

namespace App\Http\Controllers\Admin\Product\MobileAccessories;

use App\Models\Admin\Products\Mobileaccessories\MobileaccessoriesDetail;
use App\Models\Admin\Products\Mobileaccessories\MobileaccessoriesType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MobileaccessoriesController extends Controller
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
        $categories = MobileaccessoriesType::where('type','like','%'.$_GET['term'].'%')->get();

        foreach($categories as $category)
        {
            array_push($result, $category->type);
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
        $type = MobileaccessoriesType::where('type',$request->input('type'))->first();

        //$test = json_decode($request->all(),true);

        if($type == '')
        {
            $type = MobileaccessoriesType::create($request->only('type'));
        }

        $details = MobileaccessoriesDetail::create(array_merge($request->except('type'),['mobileaccessories_type_id'=>$type->id, 'product_id'=>strtoupper(uniqid(str_replace(' ', '', $request->input('brand_name').'_')))]));

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
