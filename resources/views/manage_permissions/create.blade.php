<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <title>Document</title>
</head>
<body>
<section class="home-sections">
    <form action="{{route('admin/permission.store')}}" method="post" class="create">
        @csrf
        <h1>Add Permission</h1>
        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="name">
        <label for="gurad_name">Gurad Name</label>
        <input type="text" placeholder="gurad_name" id="gurad_name" name="gurad_name">
        <button class="submit" >submit</button>
    </form>
</section>
</body>
</html>