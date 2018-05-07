<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show all</title>
</head>
<body>
    @foreach($user as $users)
        
        <img src="{{$users->name}}" alt="" width="150" height="150">
</br>
    @endforeach
</body>
</html>