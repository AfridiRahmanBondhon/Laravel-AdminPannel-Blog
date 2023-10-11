@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->status ==1 ? 'Active':'Inactive'}}

                                    </td>
                                    <td>
                                        <a href="{{route('CATEGORIES.edit',$category->id)}}" class="btn btn-outline-primary btn-sm">EDIT</a>

                                        @if($category->status ==1)
                                            <a href="{{route('CATEGORIES.show',$category->id)}}" class="btn btn-outline-warning btn-sm">Inactive</a>
                                        @else
                                            <a href="{{route('CATEGORIES.show',$category->id)}}" class="btn btn-outline-success btn-sm">Active</a>
                                        @endif

                                        <form action="{{route('CATEGORIES.destroy',$category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm float-start m-1"
                                                    onclick="return confirm('Sure to delete??')"> Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
