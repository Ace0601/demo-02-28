<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Person</title>

</head>
<body>
    <div class="container mt-3">
    <i class="fa fa-user"></i><h1 style="color: {{$color}}">Person View</h1>
    <p style="font-size:12px;">This is the 'person' view, a sample view created on Feb 28, 2023.</p>

    <hr>
        <p>
        <b>Name:</b> {{ $name }}<br>
        <b>Age:</b> {{ $age }} 
        <b>Status:</b> 
            @if($age < 18)
                <p style="color: red;">You can't vote</p>
            @else
                <p style="color: green;">You can vote!</p>
            @endif 
        </p>
    <hr>

    <h3>Siblings</h3>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-dark">
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($siblings as $sibling)
        <tr class="{{  ($sibling['age'] < 18) ? 'table-danger' : 'table-success'  }}"
                        style="vertical-align: middle">

                <td align="right">{{ $loop->index + 1 }}</td>
                <td>{{$sibling['name']}}</td>
                <td>{{$sibling['age']}}</td>
                <td>
                    @if($sibling['age'] < 18)
                        <p style="color: red;">You can't vote</p>
                    @else
                        <p style="color: green;">You can vote!</p>
                    @endif 
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>