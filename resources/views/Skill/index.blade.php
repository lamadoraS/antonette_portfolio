@extends('Skill.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Skills</h2>
            </div>
            @if(auth()->user()->role != 'spectator')
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('skills.create') }}">Add Skill</a>
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
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Skill Name</th>
                    <th>Percentage</th>
                    @if(auth()->user()->role != 'spectator')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $skill->skill_name }}</td>
                    <td>{{ $skill->percentage }}</td>
                    @if(auth()->user()->role != 'spectator')
                    <td>
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('skills.edit', $skill->id) }}">Edit</a>
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
<br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
    </div>
</div>

</body>
</html>
@endsection