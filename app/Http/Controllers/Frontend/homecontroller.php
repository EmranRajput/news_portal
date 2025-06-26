<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class homecontroller extends Controller
{
    public function index(){
    $top_trending_news = News::where('news_type', 'trending')->where('status', 1)->latest()->take(5)->get();
    // query if image exists
    $sports = Category::where('category_name', 'Sports')->first();
    $general_news = News::where('news_type', 'general')
        ->where('status', 1)
        ->whereNotNull('image')
        ->where('image', '!=', '')
        ->when($sports, function ($query) use ($sports) {
            return $query->where('category_id', '!=', $sports->id);
        })
        ->latest()
        ->take(4)
        ->get();

        // query for news without image
    $more_general_news = News::where('news_type', 'general')
        ->where('status', 1)
        ->when($sports, function ($query) use ($sports) {
            return $query->where('category_id', '!=', $sports->id);
        })
        ->latest()
        ->take(8)
        ->get();

        // feature news
    $feature_news = News::where('news_type', 'featured')
        ->where('status', 1)
        ->latest()
        ->get();

        // sports news
    if($sports){
    $trending_sports_news = News::where('category_id', $sports->id)->where('news_type','trending')
        ->where('status', 1)
         ->whereNotNull('image')
        ->where('image', '!=', '')
        ->latest()
        ->take(8)
        ->get();
    } else {
        $trending_sports_news = collect(); // empty collection if category not found
    }
       $sports_news = News::where('category_id', $sports->id)->where('news_type','general')
        ->where('status', 1)
        ->latest()
        ->take(4)
        ->get();

         return view('frontend.index',compact('top_trending_news','general_news','more_general_news','feature_news','trending_sports_news','sports_news'));
    }

    public function ViewNews($slug)
    {
        $news = News::where('slug', $slug)->where('status', 1)->firstOrFail();
        return view('frontend.news.news_detail', compact('news'));
    }

}
