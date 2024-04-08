@extends('Experiences.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experience Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Experiences</h2>
            </div>
            @if(auth()->user()->role != 'spectator')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('experiences.create') }}"> Add Experience</a>
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
                        <th scope="col">Year</th>
                        <th scope="col">Details</th>
                        <th scope="col">Image</th>
                        @if(auth()->user()->role != 'spectator')
                        <th scope="col" width="200px">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($experience as $experiences)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $experiences->title }}</td>
                        <td>{{ $experiences->experience_year }}</td>
                        <td>{{ $experiences->details }}</td>
                        <td>
                            @if($experiences->image)
                                <img src="{{'storage/' . $experiences->image}}" alt="" style="width: 50px; height:50px;">
                            @else
                                <img src="assets/img/icon.jpg" alt="" style="width: 50px; height:50px;">
                            @endif
                        </td>

                        <td>
                        
                        @if(auth()->user()->role != 'spectator')

                            <form action="{{ route('experiences.destroy', $experiences->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('experiences.edit', $experiences->id) }}">Edit</a>
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