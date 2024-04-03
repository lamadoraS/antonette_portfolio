<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Information</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-border {
            border: 2px solid #ccc; /* Adjusted border width */
            border-radius: 3px;
            padding: 15px;
            margin-top: 20px;
            background-color: #ffcccc;
            box-sizing: border-box; /* Include padding and border in the width */
        }

        .margin-tb {
            margin-bottom: 20px;
        }
    </style>
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
                    <th scope="col" width="200px">Action</th>
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
                    <td>
                        <form action="{{ route('profiles.destroy', $prof->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('profiles.edit', $prof->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                           
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
