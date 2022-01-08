<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>

<body>
    @if(Session::has('post_delete'))
    <span>{{Session::get('post_delete')}}</span>
    @endif
    <form action="{{ route('update.post') }}" method="POST">
        @csrf
        <!-- csrf will automatically generate the hidden field where token will be generated -->
        <input type="hidden" name="id" value="{{$post->id}}"><br>
        Post: <br><input type="text" name="name" value="{{$post->name}}"><br>
        Description: <br><textarea name="description" cols="30" rows="10">{{$post->description}}</textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>