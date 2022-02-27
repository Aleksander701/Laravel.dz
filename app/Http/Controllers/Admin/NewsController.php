<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;

use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;


class NewsController extends BaseController
{
    use ValidatesRequests;

    public function index ()
    {
        $news = News::all();
        // dd($news);
        return view('admin/adminPanel', ['news' => $news]);
    }

    public function create (Request $request, Category $category)
    {
        // $rules = [
        //     'category_id' => 'exists:category_news,id',
        // ];

        $rules = [
            'title' => 'exists:category_news,title',
        ];

        $this->validate($request, $rules);

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
            'categories' => $category->getList(),
        ]);
    }

    public function update (Request $request, News $news, Category $category)
    {
        if( $request->isMethod('post'))
        {
            $news->update($request->only(['title', 'content']));
            return redirect()->route('admin::index');
        }
       
        return view('admin.createNews', [
                     'news' => $news,
                     'route' => 'admin::news::update',
                     'title' => 'Изменить новость',
                     'categories' => $category->getList(),
                 ]);
    }

    public function delete (News $news)
    {
       $news->delete();
       return redirect()->route('admin::index');
    }
}