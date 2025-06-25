<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
class homecontroller extends Controller
{
    public function index(){
    $top_trending_news = News::where('news_type', 'trending')->where('status', 1)->latest()->take(5)->get();
    // query if image exists
    $general_news = News::where('news_type', 'general')
        ->where('status', 1)
        ->whereNotNull('image')
        ->where('image', '!=', '')
        ->latest()
        ->take(4)
        ->get();

        // query for news without image
    $more_general_news = News::where('news_type', 'general')
        ->where('status', 1)
        ->latest()
        ->skip(4)
        ->take(8)
        ->get();

        // feature news
    $feature_news = News::where('news_type', 'featured')
        ->where('status', 1)
        ->latest()
        ->get();


        return view('frontend.index',compact('top_trending_news','general_news','more_general_news','feature_news'));
    }

    public function ViewNews($slug)
    {
        $news = News::where('slug', $slug)->where('status', 1)->firstOrFail();
        return view('frontend.news.news_detail', compact('news'));
    }

}
