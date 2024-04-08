@extends('Blog.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blogs</h2>
            </div>
            @if(auth()->user()->role != 'spectator')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Add Blog</a>
            </div>
            @endif
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container-border">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Content</th>
                        @if(auth()->user()->role != 'spectator')
                        <th scope="col" width="200px">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog as $blogs)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $blogs->title }}</td>
                        <td>
                            @if($blogs->image)
                            <img src="{{'storage/' . $blogs->image}}" alt="" style="width: 50px; height:50px;">
                            @else
                            <img src="assets/img/icon.jpg" alt="" style="width: 50px; height:50px;">
                            @endif
                        </td>
                        <td>{{ $blogs->content }}</td>
                        <td>
                        @if(auth()->user()->role != 'spectator')
                            <form action="{{ route('blogs.destroy', $blogs->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('blogs.edit', $blogs->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
    </div>
</div>

</body>
</html>
@endsection