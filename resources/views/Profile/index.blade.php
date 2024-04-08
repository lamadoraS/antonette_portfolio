@extends('Profile.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Information</h2>
            </div>
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
                        <th scope="col">Name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Age</th>
                        <th scope="col">Degree</th>
                        @if(auth()->user()->role != 'spectator')
                            <th scope="col" width="200px">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $prof)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $prof->title }}</td>
                        <td>{{ $prof->name }}</td>
                        <td>{{ $prof->birthday }}</td>
                        <td>{{ $prof->email }}</td>
                        <td>{{ $prof->phone }}</td>
                        <td>{{ $prof->address }}</td>
                        <td>{{ $prof->age }}</td>
                        <td>{{ $prof->degree }}</td>
                        @if(auth()->user()->role != 'spectator')
                            <td>
                                <form action="{{ route('profiles.destroy', $prof->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('profiles.edit', $prof->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
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
