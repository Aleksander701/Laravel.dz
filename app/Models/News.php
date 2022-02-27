<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];
}
