<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{route('student.store')}}">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <input type="text" name="class" placeholder="class"><br>
    <button type="submit">Add Student</button>
</form>

</body>
</html>
