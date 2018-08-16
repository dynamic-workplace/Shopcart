<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = '';
        $column1 = Schema::getColumnListing($id.'_brands');
        $column2 = Schema::getColumnListing($id.'_details');

        $columns = array_merge($column1, $column2);

        foreach ($columns as $column)
        {
            if(!fnmatch('*id', $column)) {
                if (!fnmatch('*_at', $column)) {
                    $form .= '<div class="form-group">
                                <label for="' . $column . '">' . str_replace('_', ' ', $column) . '</label>
                                <input type="text" name="' . $column . '" class="form-control" placeholder="' . str_replace('_', ' ', $column) . '"/>
                              </div>';
                }
            }
        }

        if($form !== '')
        {
            $form .= '<div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Upload"/>
                      </div>';
        }

        return response()->json(['form'=>$form]);

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
