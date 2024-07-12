<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
{

    return view('landings.landing');
}
    public function detail()
{

    return view('landings.detail');
}
    public function suv()
{

    return view('landings.suv');
}
    public function mpv()
{

    return view('landings.mpv');
}
    public function citycar()
{

    return view('landings.citycar');
}
    public function stationwagon()
{

    return view('landings.stationwagon');
}
    public function crossover()
{

    return view('landings.crossover');
}

}
