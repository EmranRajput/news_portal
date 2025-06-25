@extends('backend.master')
 @section('title')
    Category
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
                    <h4>View Categories</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                            <a href="{{ route('add.category') }}" class="btn form-control">
                                <i class="fas fa-plus"></i> Add Category
                            </a>
                        </div>

                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>SL</th>
                          <th>Category Name</th>
                          <th>Slug</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_slug }}</td>
                                <td>
                                    <form action="{{ route('category.status.toggle', $category->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="custom-switch mt-2">
                                                <input type="checkbox"
                                                    name="status"
                                                    onchange="this.form.submit()"
                                                    class="custom-switch-input"
                                                    {{ $category->status ? 'checked' : '' }}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('edit.category', $category->id) }}" class="btn btn-secondary">Edit</a>

                                    <form action="{{ route('delete.category', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


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


