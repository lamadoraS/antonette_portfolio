@extends('Webinar.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Webinar')</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Webinar</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('webinars.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>

        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('webinars.update', $webinar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="container-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" value="{{ $webinar->title }}" class="form-control" placeholder="Enter Title">
                            @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Agenda:</strong>
                            <input type="text" name="agenda" value="{{ $webinar->agenda }}" class="form-control" placeholder="Enter Agenda">
                            @error('agenda')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Host Name:</strong>
                            <input type="text" name="host_name" value="{{ $webinar->host_name }}" class="form-control" placeholder="Enter Host Name">
                            @error('host_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input type="date" name="date" value="{{ $webinar->date }}" class="form-control" placeholder="Enter Date">
                            @error('date')
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