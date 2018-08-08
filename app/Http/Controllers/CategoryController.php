<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $name = $request->input('name');
        $category = Category::search('name', $name);
        if($category)
        {
            return response()->json(['warning'=>$name.' category already exists']);
        }
        else
        {
            $category = new Category();
            $category->name = strtolower($name);
            $category->save();
            return response()->json(['success'=>ucfirst($category->name)]);
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
        $name = $request->input('name');
        $category = Category::search('name', strtolower($name));
        if ($category) {
            return response()->json(['warning' => $name . ' category already exists!']);
        } else {
            $category = Category::search('id', $id);
            $result = $category->update([
                'name' => $name
            ]);
            return response()->json(['success' => ucfirst($name) . ' has been updated!']);
        }
    }
    /**{
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::search('id',$id);
        $category->delete();
        return response()->json(['success'=>'Deleted!']);
    }
}
