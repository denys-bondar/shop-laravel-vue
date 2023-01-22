<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class IndexContoller extends Controller
{
    //

    public function __invoke()
    {

        return view('main.index');

    }
}
