@extends('Contact.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contact Details</h2>
            </div>
        </div>
    </div>

    <div class="card container-border">
        <div class="card-header">Contact</div>
        <div class="card-body">
            <h5 class="card-title">First Name : {{ $contact->first_name }}</h5>
            <p class="card-text">Last Name : {{ $contact->last_name }}</p>
            <p class="card-text">Email Address : {{ $contact->email }}</p>
            <p class="card-text">Message : {{ $contact->message }}</p>
        </div>
    </div>

    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('contacts.index') }}">Back</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection