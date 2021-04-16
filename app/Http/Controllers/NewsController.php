<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){
        $news = News::all();
        return view('welcome')->with('news', $news);
    }

    public function store(Request $request){
        return News::create($request->all());
    }

    public function delete(Request $request){
        $news = News::findOrFail($request->route('id'));
        $news -> delete();
        return 204;
    }
}
