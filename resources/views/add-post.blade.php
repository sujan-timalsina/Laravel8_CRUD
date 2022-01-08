<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>

<body>
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
    <form action="{{ route('save.post') }}" method="POST">
        @csrf
        <!-- csrf will automatically generate the hidden field where token will be generated -->
        Post: <br><input type="text" name="name" value=""><br>
        Description: <br><textarea name="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>