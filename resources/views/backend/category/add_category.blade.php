@extends('backend.master')
 @section('title')
    Add Category
 @endsection
 @section('home')


      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add Category</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('view.category') }}">Category List</a></div>

            </div>
          </div>

          <div class="section-body">


            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <form action="{{ route('store.category') }}" method="POST">
                @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="category_name" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="category_slug" class="form-control" required="">
                      </div>

                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </section>
      </div>
@endsection
