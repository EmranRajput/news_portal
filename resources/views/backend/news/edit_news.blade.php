@extends('backend.master')
 @section('title')
    Edit News
 @endsection
 @section('home')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Edit News</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('index.news') }}">News List</a></div>
        </div>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
            <form action="{{ route('update.news', $news->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Select Category</label>
                                <select name="category_id" class="form-control selectric" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $news->category_id ? 'selected' : '' }}>
                                            {{ $cat->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Select News Type</label>
                            <div class="selectgroup d-flex flex-wrap">
                                <label class="selectgroup-item">
                                    <input type="radio" name="news_type" value="trending"  class="selectgroup-input" {{ $news->news_type === 'trending' ? 'checked' : '' }} >
                                    <span class="selectgroup-button">Trending</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="news_type" value="featured"  class="selectgroup-input" {{ $news->news_type === 'featured' ? 'checked' : '' }}>
                                    <span class="selectgroup-button">Featured</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="news_type" value="general" class="selectgroup-input" {{ $news->news_type === 'general' ? 'checked' : '' }} >
                                    <span class="selectgroup-button">General</span>
                                </label>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <label>News Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $news->title }}" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>News Image</label>
                            <div class="d-flex align-items-center">
                                {{-- File input --}}
                                <input type="file" name="image" value="{{ $news->image }}" class="form-control-file" onchange="previewImage(event)">

                                {{-- Existing or preview image --}}
                                <div style="margin-left: 10px;">
                                    @if ($news->image)
                                        <img id="preview" src="{{ asset('storage/' . $news->image) }}" width="120" alt="News Image">
                                    @else
                                        <img id="preview" src="#" alt="Image preview" style="display:none;" width="120">
                                    @endif
                                </div>
                            </div>
                        </div>


                    <div class="form-group">
                        <label><h6>Content</h6></label>
                        <div class="col-sm-12 col-md-12">
                          <textarea class="summernote" name="content">{!! $news->content !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button name="action" value="publish" class="btn btn-success" type="submit">Update Now</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>




@endsection
