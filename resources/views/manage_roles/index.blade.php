<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('role.create')}}">Add Role</a>
    <table border="1px" style="border-collapse:collapse;" id="customers" width="100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gurad_Name</th>
    </tr>
    @foreach($RoleData as $data)

    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->guard_name}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>