@extends('admin.master')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-xl-12 mx-auto">

                <div class="card">
                    <div class="card-header">Blog Table</div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>title</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Discription</th>
                                <th>Image</th>
                                <th>Create At</th>
                                <th>Publish Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->category->category_name}}</td>
                                    <td>{{$blog->author_name}}</td>
                                    <td>{{substr($blog->description,0,50)}}</td>
                                    <td><img src="{{asset($blog->image)}}" alt="" style="height: 50px; width: 50px"></td>
                                    <td>{{date('j F Y', strtotime($blog->created_at))}}</td>
                                    <td>{{$blog->date == null ? 'Null' : date('j F Y', strtotime($blog->date))}}</td>
                                    <td>{{$blog->status ==1 ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-primary btn-sm float-start m-1">Edit</a>
                                        @if($blog->status ==1)
                                            <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-warning btn-sm m-1 float-start">Inactive</a>
                                        @else
                                            <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-success btn-sm m-1 float-start">Active</a>
                                        @endif

                                        <form action="{{route('blogs.destroy', $blog->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm float-start m-1" onclick="return confirm('Sure to delete??')"> Delete </button>

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
    </section>
@endsection
