<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public  function index() {
        return view('frontend.index');
    }
    public  function portfolio() {
        return view('frontend.portfolio');
    }

    public function portfolioDetail()
    {
        return view('frontend.portfolioDetail');
    }

    public  function about() {
        return view('frontend.about');
    }

    public  function services() {
        return view('frontend.services');
    }

    public function serviceDetail()
    {
        return view('frontend.serviceDetail');
    }

    public  function blog() {
        return view('frontend.blog');
    }

    public  function blogDetail($slug) {
        return view('frontend.blogDetail');
    }

    public  function contact() {
        return view('frontend.contact');
    }

}
