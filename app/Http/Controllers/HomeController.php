<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page()
    {
        return view('pages.home');
    }

    public function heroData()
    {
        $heroData = DB::table('hero')->get();
        return $heroData;
    }

    public function aboutData()
    {
        $aboutData = DB::table('abouts')->get();
        return $aboutData;
    }

    public function socialData()
    {
        $socialData = DB::table('socials')->get();
        return $socialData;
    }
}
