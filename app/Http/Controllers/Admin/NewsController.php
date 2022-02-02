<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class NewsController extends BaseController
{


    public function index ()
    {
        $news = News::all();
        // dd($news);
        return view('admin/adminPanel', ['news' => $news]);
    }

    public function create (Request $request)
    {
        $news = new News ();
        if($request->isMethod('post')) {
        // dd($request);
        $news->fill($request->all());
        $news->save();
        return redirect()->route('admin::index');
        }

        return view('admin/createNews', [
            'news' => $news,
            'route' => 'admin::news::create',
            'title' => 'Добавление новости',
        ]);
    }

    public function update (Request $request, News $news)
    {
        // dd($news);
        if ($request->method('post')) {
            // dd($request);
            $news->fill($request->all());
            $news->save();
            return redirect()->route('admin::index');
        }

        return view('admin/createNews', [
            'news' => $news,
            'route' => 'admin::news::update',
            'title' => 'Изменить новость',
        ]);
    }

    public function delete (News $news)
    {
       $news->delete();
       return redirect()->route('admin::index');
    }
}