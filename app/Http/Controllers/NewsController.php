<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'title' => 'news 1'
        ],
        2 => [
            'title' => 'news 2'
        ]
    ];

    public function index()
    {
        $response = '';
        foreach ($this->news as $id => $item) {
            $url = route('news::card', ['id' => $id]);
            $response .= "<div>
                <a href='{$url}'>
                        {$item['title']}
                </a>
                  </div>";
        }
        return $response;
    }

    public function card($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }
}