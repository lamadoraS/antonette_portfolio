<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational Attainment</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }

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

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Attainment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('education.create') }}">Create New</a>
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
                    <th scope="col">Grade Level</th>
                    <th scope="col">School Year</th>
                    <th scope="col">School Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Address</th>
                    <th scope="col" width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($education as $educations)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $educations->grade_level }}</td>
                    <td>{{ $educations->school_year }}</td>
                    <td>{{ $educations->school_name }}</td>
                    <td>{{ $educations->description }}</td>
                    <td>
                        <form action="{{ route('education.destroy', $educations->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('education.edit', $educations->id) }}">Edit</a>
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
