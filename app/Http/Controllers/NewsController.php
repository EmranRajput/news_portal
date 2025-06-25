<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')->where('status', 1)->latest()->get();
        return view('backend.news.news_list', compact('news'));
    }

    public function AddNews()
    {
        $category = Category::where('status', 1)->latest()->get();
        return view('backend.news.add_news', compact('category'));

    }
    /**
     * Store a newly created resource in storage.
     */
    public function StoreNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
            'news_type' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->only(['title', 'category_id', 'content', 'news_type' ,'published_at']);
        $data['slug'] = Str::slug($request->title);
        $data['short_description'] = Str::limit(strip_tags($request->content), 150);
        $data['status'] = $request->action === 'publish' ? 1 : 0;
        $data['published_at'] = $request->action === 'schedule' ? $request->published_at : null;

        // if ($request->hasFile('image')) {
        //     $data['image'] = $request->file('image')->store('news_images', 'public');
        // }

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = uniqid() . '.jpg';

        $manager = new ImageManager(new Driver());
        $image = $manager->read($file);
        $image->resize(600, 400);

        $savePath = storage_path('app/public/news_images/' . $filename);
        $image->toJpeg()->save($savePath);

        $data['image'] = 'news_images/' . $filename;
    }

        News::create($data);

        return redirect()->route('index.news')->with('success', 'News created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function ViewNews($id)
    {
        $news = News::with('category')->findOrFail($id); // with category relation
            return view('backend.news.view_news', compact('news'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EditNews($id)
    {
        $news = News::find($id);
        $category = Category::where('status', 1)->latest()->get();
            return view('backend.news.edit_news',compact('news','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateNews(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
            'news_type' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $news = News::findOrFail($id);

        $data = $request->only(['title', 'category_id', 'content','news_type', 'published_at']);
        $data['slug'] = Str::slug($request->title);
        $data['short_description'] = Str::limit(strip_tags($request->content), 150);
        $data['status'] = $request->action === 'publish' ? 1 : 0;
        $data['published_at'] = $request->action === 'schedule' ? $request->published_at : null;

        // Replace old image if a new one is uploaded
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($news->image) {
                    Storage::disk('public')->delete($news->image); // ✅ No backslash here
                }

                $data['image'] = $request->file('image')->store('news_images', 'public');
            }

        $news->update($data);
            return redirect()->route('index.news')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function DeleteNews($id)
    {
        $news = News::findOrFail($id);
        // Delete image from storage if it exists
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->back()->with('success', 'News deleted successfully.');
    }


    public function ToggleNewsStatus(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->status = !$news->status; // toggle between 1 and 0
        $news->save();

        return back()->with('success', 'News status updated.');
    }

  public function DraftNews()
    {
        $news = News::with('category')->where('status', 0)->latest()->get();
        return view('backend.news.draft_news', compact('news'));
    }

  public function ScheduleNews()
    {
        $news = News::where('status', 0)->latest()->get();
        return view('backend.news.draft_news', compact('news'));
    }

}
