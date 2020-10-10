<?php

namespace App\Modules\PlayerMatch\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayerMatchController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("PlayerMatch::welcome");
    }
}
