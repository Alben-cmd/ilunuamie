<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        
    	$news = News::where('status', 1)->orderBy('created_at', 'desc')->get();
    	$active_menu = 'news';
    	return view('news.index', compact('news', 'active_menu'));
    }

    public function create(){
        $active_menu = 'create';
        return view('news.create', compact('active_menu'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'news' => 'required',
        ]);

        $news = new News();

            $news->title=$request->title;
            $news->news =$request->news; 
            $news->status = 1; 

        $news->save();

        return redirect()->route('news.index')->with('success', 'News Published!');

    }

    public function edit($id)
    {
        $news = News::find($id);
        $active_menu = 'news';
        return view('news.edit', compact('news', 'active_menu'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->news = $request->news;
        $news->status = 1;

        $news->save();
        return redirect()->route('news.index')->with('success', 'News Updated!');
    }

    public function show($id)
    {
        $news = News::find($id);
        $active_menu = 'news';
        return view('news.show', compact('news', 'active_menu'));
    }

    public function unpublish($id)
    {
        $news = News::find($id);
        $news->status = 0;
        $news->save();
        return redirect()->route('news.index')->with('success', 'News Unpublished!');
    }

    public function unpublished()
    {
        $news = News::where('status', 0)->orderBy('created_at', 'desc')->get();
    	$active_menu = 'disabled-news';
    	return view('news.unpublished_news', compact('news', 'active_menu'));
    }

    public function publish($id)
    {
        $news = News::find($id);
        $news->status = 1;
        $news->save();
        return redirect()->route('news.index')->with('success', 'News published!');
    }
}
