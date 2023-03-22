<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <center>
        <h1>Hello, {{ $name }}</h1>
        <form action="about" method="post">
            @csrf
            <input type="text" name="name" id="">
            <input type="submit" value="Send">
        </form>
    </center>
</body>

</html>
