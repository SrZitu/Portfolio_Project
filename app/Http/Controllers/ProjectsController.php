<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function page()
    {
        $seo=DB::table('seoproperties')->where('pageName','=','projects')->first();
        return view('pages.projects',['seo'=>$seo]);
    }

    public function projectData()
    {

        return  DB::table('projects')->get();
    }
}
