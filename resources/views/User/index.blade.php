@extends('User.layout');
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            
            <div class="pull-right mb-2">
                @if(auth()->user()->role =='admin')
                    <a class="btn btn-success" href="{{ route('users.create') }}">Add User</a>
                @endif
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
                        <th>#</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                    @if(auth()->user()->id == $users->id || auth()->user()->role == 'admin')
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $users->role }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>
                            @if(auth()->user()->role == 'admin')
                                <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $users->id) }}">Edit</a>
                                
                                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @elseif(auth()->user()->id == $users->id)
                                <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $users->id) }}">Edit</a>
                                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endif
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
