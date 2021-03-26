<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->Program = new Program();
    }

    public function program(){
        $data = [
            'programs' => $this->Program->allData(),
        ];

        return view ('program', $data);
    }
}
