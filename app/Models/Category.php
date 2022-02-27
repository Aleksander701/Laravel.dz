<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Category extends Model
{
    public function getList ()
    {
        $categories_table = DB::table('category_news');
        return $categories_table->select(['id', 'title'])
                        ->get()
                        ->pluck('title', 'id');
    }
}
