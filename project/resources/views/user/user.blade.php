<html>
<body>
@foreach($getUsers as $a)
    <p>{{$a->name}}</p>
    <p>{{$a->email}}</p>
@endforeach
</body>
</html>
