@extends('backend.master')

@section('title')
    View News
@endsection

@section('home')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>View News</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('index.news') }}">News List</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h2 class="mb-3">{{ $news->title }}</h2>

                                <p><strong>Category:</strong> {{ $news->category->category_name ?? 'N/A' }}</p>

                                <p><strong>Published At:</strong>
                                    {{ $news->created_at ? $news->created_at->format('d M Y h:i A') : 'Not scheduled' }}
                                </p>

                                @if($news->image)
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $news->image) }}" width="400" class="img-thumbnail" alt="News Image">
                                    </div>
                                @endif

                                <p><strong>Short Description:</strong><br>{{ $news->short_description }}</p>

                                <hr>
                                <div>
                                    <h5>Full Content:</h5>
                                    {!! $news->content !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
