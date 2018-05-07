<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File-upload</title>
</head>
<body>
    
<form action="store" method="post" enctype="multipart/form-data">

<label for="name">name</label>
<input type="text" name="name"></br>

<label for="image">image</label>
<input type="file" name="image">

<input type="hidden" name="_token" value="{{csrf_token()}}">

<input type="submit" type="submit" value="submit">

</form>


</body>
</html>