<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function page()
    {
        return view('pages.contact');
    }

    public function contactMe()
    {
    }
}
