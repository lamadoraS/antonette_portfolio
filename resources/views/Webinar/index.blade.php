<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-border {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            background-color: #ffcccc; 
        }

        .margin-tb {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinar</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('webinars.create') }}">Add Webinar</a>
            </div>
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
                    <th>Title</th>
                    <th>Agenda</th>
                    <th>Host Name</th>
                    <th>Date</th>
                    <th scope="col" width="200px">Action</th>
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
                        <form action="{{ route('webinars.destroy', $webinars->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('webinars.edit', $webinars->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
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
