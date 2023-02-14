<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create post</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf 
        <input type="text" name="body" placeholder="enter post"><br>
        <input type="text" name="title" placeholder="enter title"><br>
        <button type="submit" name="subnit">create</button>
    </form>
</body>
</html>

