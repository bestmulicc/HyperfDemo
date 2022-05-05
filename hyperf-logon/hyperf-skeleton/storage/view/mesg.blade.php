<html>
<head>
    <title>Database</title>
</head>
<body>
@foreach($usermsg as $user)
    <p>{{$user->username}}</p>
    <p>{{$user->password}}</p>
@endforeach
</body>
</html>