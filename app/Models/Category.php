<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    @extends('welcome')

    @section('title')
        <a href="{{ route('admin::index')}}" style="text-decoration:revert;"> Админка категорий </a>
        <br>
        Создание категории
    @endsection
    
    
    @section('content')
    
    <form action="{{route('admin::category::create')}}" method="post">
        <label class="form-label">
            Название категории
        </label>
        <div class="form-group">
            <input type="text" class="title" style="border: 2px solid black;">
        </div>
        <div class="form-group">
            <input type="submit">
        </div>
    </form>
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
    
    @endsection 
}
