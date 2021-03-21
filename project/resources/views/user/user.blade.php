<html>
<body>
@foreach($getUsers as $a)
    <p>{{$a->name}}</p>
    <p>{{$a->email}}</p>
    <p>{{$a->is_admin}}</p>
@endforeach
</body>
</html>
