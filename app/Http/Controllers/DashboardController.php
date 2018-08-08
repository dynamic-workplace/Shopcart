<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
