@extends('backend.master')
 @section('title')
Draft News
 @endsection
 @section('home')

<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Draft News</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                            <a href="{{ route('add.news') }}" class="btn form-control">
                                <i class="fas fa-plus"></i> Add News
                            </a>
                        </div>

                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>News Title</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        {{-- show draft news --}}
                        @if ($news->count())
                            @foreach ($news as $news_items)
                            <tr>
                                <td>{{ $news_items->title }}</td>
                                <td>
                                    @if ($news_items->image)
                                        <img src="{{ asset('storage/' . $news_items->image) }}" width="80" alt="News Image">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>
                                <td>{!! $news_items->short_description !!}</td>
                                <td>{{ $news_items->category->category_name ?? 'No Category' }}</td>
                                <td>{{ $news_items->news_type }}</td>
                                <td>
                                    <form action="{{ route('news.status.toggle', $news_items->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="custom-switch mt-2">
                                                <input type="checkbox"
                                                    name="status"
                                                    onchange="this.form.submit()"
                                                    class="custom-switch-input"
                                                    {{ $news_items->status ? 'checked' : '' }}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </form>
                                </td>
                                 <td>
                                    <a href="{{ route('view.news', $news_items->id) }}" class="btn btn-info btn-sm m-1"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('edit.news', $news_items->id) }}" class="btn btn-warning btn-sm m-1"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('delete.news', $news_items->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            {{-- if draft news not here then show this message --}}
                        @else
                        <tr>
                            <td colspan="5" class="text-center text-muted">Draft list is empty.</td>
                        </tr>
                        @endif

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection
  <script src="{{asset('/backend/js/page/components-table.js')}}"></script>


