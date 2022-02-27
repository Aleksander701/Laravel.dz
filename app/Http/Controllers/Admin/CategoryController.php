<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
    

    public function index (Category $category)
    {
       $newsCategory = $category->getNewsCategory();
    //    dd($newsCategory);
       return view('admin/showCategory', ['data' => $newsCategory]);
    }

    public function create ()
    {
       return view('admin/createCategory');
    }

    public function delete ()
    {
       
    }
}
