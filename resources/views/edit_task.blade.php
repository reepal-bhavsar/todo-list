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

    table, form {
        margin-top: 50px;
        padding: 20px;
    }

    #taskname {
        width: 50%;
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
        <form action="../update_task/{{$edit_task_arr->id}}">
            <input name="taskname" id="taskname" value="{{$edit_task_arr->name}}" placeholder="Enter New Task" class="form-control" /><br/>
            <a href="/" class="btn btn-primary">Back</a>
            <input type="submit" class="btn btn-primary" value="Update Task" />
        </form>

    </div>
</body>

</html>