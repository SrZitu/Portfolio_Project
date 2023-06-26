<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function page()
    {
        return view('pages.projects');
    }

    public function projectData()
    {

        return  DB::table('projects')->get();

    }
}
