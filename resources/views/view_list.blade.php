<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo List</title>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    table {
        margin-top: 50px;
    }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="antialiased">
    <div class="container">
        <div class="text-right">
            <a href="create_task_page" class="btn btn-primary">Create Task</a>
        </div>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Create At</th>
                <th>Action</th>
            </tr>
            @foreach($todo_arr as $todo_list_arr)
            <tr>
                <td>{{$todo_list_arr->id}}</td>
                <td>{{$todo_list_arr->name}}</td>
                <td>{{$todo_list_arr->created_at}}</td>
                <td><a href="delete_task/{{$todo_list_arr->id}}">Delete</a> || <a href="edit_task_page/{{$todo_list_arr->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>