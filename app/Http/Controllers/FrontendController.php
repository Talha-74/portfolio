<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function sidebar()
    {
        return view('layout.sidebar');
    }

    public function testapp()
    {
        return view('layout.app');
    }

    public function index()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function news()
    {
        return view('frontend.news');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
    public function service()
    {
        return view('frontend.service');
    }
}
