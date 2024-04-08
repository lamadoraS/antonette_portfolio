@extends('Skill.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Skill')</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Skill</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('skills.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>

        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="container-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Skill Name:</strong>
                            <input type="text" name="skill_name" value="{{ $skill->skill_name }}" class="form-control" placeholder="Edit Skill Name">
                            @error('skill_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Percentage:</strong>
                            <input type="number" name="percentage" value="{{ $skill->percentage }}" class="form-control" placeholder="Enter Percentage">
                            @error('percentage')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection
