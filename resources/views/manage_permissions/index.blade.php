<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('permission.create')}}">Add Permission</a>
    <table border="1px" style="border-collapse:collapse;" id="customers" width="100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gurad</th>
        </tr>
        @foreach($PermissionData as $Permission)
            <tr>
                <td>{{$Permission->id}}</td>
                <td>{{$Permission->name}}</td>
                <td>{{$Permission->guard_name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>