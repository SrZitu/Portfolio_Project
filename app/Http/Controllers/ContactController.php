<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page()
    {
        $seo=DB::table('seoproperties')->where('pageName','=','contact')->first();
        return view('pages.contact',['seo'=>$seo]);
    }

    public function contactMe(Request $request)

    {

        return DB::table('contacts')->insert($request->input());
    }
}
