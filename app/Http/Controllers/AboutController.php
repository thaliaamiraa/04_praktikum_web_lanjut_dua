<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->About = new About();
    }

    public function about(){
        $data = [
            'abouts' => $this->About->allData(),
        ];

        return view ('aboutus', $data);
    }
}
