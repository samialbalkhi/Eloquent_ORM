<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit post</h1>
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @method('PUT')
        @csrf 
        <label for="">body</label>
        <input type="text" name="body" value="{{$post->body}}"><br>
        <label for="">title</label>
        <input type="text" name="title"value="{{$post->title}}"><br>
        <button type="submit" name="subnit">create</button>
    </form>
</body>
</html>

