<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;

class NewsParser
{
    public function run(string $source)
    {
        $xml = XmlParser::load($source);
        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'chanel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);

        Storage::disk('publiclogs')->append('log.txt', date('c'). ' '. $source);

        return $data;
    }
}