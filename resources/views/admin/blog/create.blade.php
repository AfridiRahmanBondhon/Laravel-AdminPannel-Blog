@extends('admin.master')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-xl-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Blog Form</h6>
                            <hr/>
                            <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="" selected>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Author Name</label>
                                    <input type="text" class="form-control" name="author_name">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date_input">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save Info</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
