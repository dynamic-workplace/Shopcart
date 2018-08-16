<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Main\Category;
use App\Models\Admin\Main\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function categoryIndex()
    {
        $categories = Category::everything();
        return view('admin.dashboard.category.index')->with('categories', $categories);
    }

    public function categoryManage()
    {
        $categories = Category::everything();
        return view('admin.dashboard.category.management')->with('categories', $categories);
    }

    public function subcategoryIndex()
    {
        $categories = Category::everything();
        return view('admin.dashboard.subcategory.index')->with('categories', $categories);
    }

    public function subcategoryManage()
    {
        $categories = Category::everything();
        return view('admin.dashboard.subcategory.management')->with('categories', $categories);
    }

    public function createNewProduct()
    {
        $categories = Category::everything();
        return view('admin.dashboard.product.create')->with('categories', $categories);
    }

    public function test(Request $request)
    {
        $result ='';
        $categories = Category::where('name','like',$request->input('queue').'%')->get();
        if($categories)
        {
            foreach($categories as $category)
            {
                $result .= "<li>".$category->name."</li>";
            }
        }
        else
        {
            $result = '';
        }

        return response()->json(['result' => $result]);
    }

    public function makeWork()
    {
        //return strtoupper(uniqid('apple_'));
//        if(fnmatch('*id','product_id'))
//        {
//            return 'Matched!';
//        }
//
//        return 'No Match';

        return Schema::getColumnListing('mobile_details');
    }


}
