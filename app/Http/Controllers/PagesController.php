<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PagesController extends Controller
{
    public function home()
    {
        $news = News::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.home', compact ('news'));
    }
    public function faqs()
    {
        return view('pages.faqs');
    }


    public function sanefGroup()
    {
        return view('pages.courses.sanef');
    }

    public function cfltGroup()
    {
        return view('pages.courses.cflt');
    }

    public function basicFinGroup()
    {
        return view('pages.courses.basicFinLit');
    }
    public function blog()
    {
        return view('pages.blog');
    }

    public function terms_of_use()
    {
        return view('pages.terms_of_use');
    }

    public function e_naira()
    {
        return view('pages.e_naira');
    }
    public function fraud_scam()
    {
        return view('pages.fraud_scam');
    }
    public function rights_responsiblities()
    {
        return view('pages.rights');
    }
    public function about_cflt()
    {
        return view('pages.about_cflt');
    }
    public function about_sanef()
    {
        return view('pages.about_sanef');
    }
    public function about_napgep()
    {
        return view('pages.about_napgep');
    }
    public function news()
    {
        $news = News::where('status', 1)->orderBy('created_at', 'desc')->paginate(10);
        $old_news = $news->slice(5);
        // dd( $old_news);
        return view('pages.news_front', compact('news', 'old_news'));
    }
    public function news_one()
    {
        return view('pages.news_one');
    }
    public function grassroot_leveraging()
    {
        return view('pages.grassroot_leveraging');
    }
    public function global_week($id)
    {
        $news = News::find($id);
        return view('pages.global_week', compact('news'));
    }
    public function show($id)
    {
        $news = News::find($id);
        return view('pages.global_week', compact('news'));
    }

    public function try()
    {
        return view ('pages.blog');
    }
}
