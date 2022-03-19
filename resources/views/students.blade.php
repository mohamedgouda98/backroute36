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

<a href="{{route('student.create')}}"><h4>Create new student</h4></a>

<table border="1px">
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>class</th>
        <th>action</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->class}}</td>
            <td>
                <form method="post" action="{{route('student.delete')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$student->id}}">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
