<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function aboutUs()
    {
        return view('extra.aboutus.content');
    }

    public function blogShow()
    {
        return view('extra.blog.detail');
    }

    public function blogList()
    {
        return view('extra.blog.list');
    }

    public function contact()
    {
        return view('extra.contact.content');
    }

    public function faq()
    {
        return view('extra.faq.content');
    }

    public function team()
    {
        return view('extra.team.content');
    }

    public function serviceShow()
    {
        return view('extra.service.detail');
    }

    public function serviceList()
    {
        return view('extra.service.list');
    }
}
