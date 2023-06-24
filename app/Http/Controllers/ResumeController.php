<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page()
    {
        return view('pages.resume');
    }

    public function resumeLink()
    {
        $resumeLink = DB::table('resumes')->get();
        return $resumeLink;
    }

    public function experienceData()
    {
        $experienceData = DB::table('experiences')->get();
        return $experienceData;
    }

    public function educationData()
    {
        $educationData = DB::table('educations')->get();
        return $educationData;
    }

    public function skillsData()
    {
        $skillsData = DB::table('skills')->get();
        return $skillsData;
    }

    public function languageData()
    {
        $languageData = DB::table('languages')->get();
        return $languageData;
    }
}
