<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    @if(\Session::has())

    @endif
    <form action="{{route("form.post")}}" method="POST">
@csrf
<label for="name">Full name</label>
<input type="text" id="name" name="name" value="{{old("name")}}">
<label for="age">Age</label>
<input type="text" id="age" name="age" value="{{old("age")}}">
<button type="submit">Submit</button>


    </form>
</body>
</html>