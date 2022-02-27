<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index ()
    {
        $xml = XMLParser::load('https://www.cbr-xml-daily.ru/daily.xml');
        $data = $xml->parse([
            'date' => ['uses' => '@attributes.Date'],
            'nameXml' => ['uses' => '@attributes.name'],
            'currencies' => ['uses' => 'Valute[Name,Value]'],
        ]);

        foreach($data['currencies'] as $item) {
            $news = new News();
            $news['title'] = $item['Name'];
            $news['content'] = $item['Value'];
            $news['category_id'] = 1;
            $news->save();
        }
        echo 'Данные сохранены';

        $news = News::all();
        return view('admin.parser', ['news' => $news]);
    }

    public function update (Request $request, News $news)
    {
        if ($request->isMethod('post'))
        {
            $news->update($request->only(['title', 'content']));
            return redirect()->route('admin::parser');
        }
       
        return view('admin.updateApiNews', [
                     'news' => $news,
                     'route' => 'admin::parser::update',
                     'title' => 'Изменить новость',
                 ]);
    }
}