<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post/{{$data->id}}" method="POST">
    @csrf
    @method('patch')
    Title: <input type="text" name="title" id="" value="{{$data->title}}">
    <br><br>
    Description:<input type="text" name="description" id="" value="{{$data->description}}">
    <br><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>

