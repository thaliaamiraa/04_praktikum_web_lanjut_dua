<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->News = new News();
    }

    public function news(){
        $data = [
            'news' => $this->News->allData(),
        ];

        return view ('news', $data);
    }
}
