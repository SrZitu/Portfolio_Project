<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page()
    {
        $seo=DB::table('seoproperties')->where('pageName','=','Home')->first();
        return view('pages.home',['seo'=>$seo]);
    }

    public function heroData()
    {
        return DB::table('hero')->get();
    }

    public function aboutData()
    {
        return DB::table('abouts')->get();
    }

    public function socialData()
    {
        return  DB::table('socials')->get();
    }
}
