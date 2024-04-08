@extends('Educational.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Educational</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Educational</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('education.index')}}"> Back</a>
                </div>
            </div>
        </div>

        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Grade Level:</strong>
                            <input type="text" name="grade_level" class="form-control" placeholder="Enter Grade Level">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>School Year:</strong>
                            <input type="text" name="school_year" class="form-control" placeholder="Enter School Year">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>School Name:</strong>
                            <input type="text" name="school_name" class="form-control" placeholder="Enter School Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description">
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

