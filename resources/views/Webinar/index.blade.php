@extends('Webinar.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        @if(auth()->user()->role != 'spectator')
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('webinars.create') }}">Add Webinar</a>
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
                        <th>#</th>
                        <th>Title</th>
                        <th>Agenda</th>
                        <th>Host Name</th>
                        <th>Date</th>
                        @if(auth()->user()->role != 'spectator')
                        <th scope="col" width="200px">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($webinar as $webinars)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $webinars->title }}</td>
                        <td>{{ $webinars->agenda }}</td>
                        <td>{{ $webinars->host_name }}</td>
                        <td>{{ $webinars->date }}</td>
                        <td>
                        @if(auth()->user()->role != 'spectator')
                            <form action="{{ route('webinars.destroy', $webinars->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('webinars.edit', $webinars->id) }}">Edit</a>
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
    <div class="pull-right back-button">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
    </div>
</div>

</body>
</html>
@endsection