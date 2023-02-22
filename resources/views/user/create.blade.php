<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

<section class="home-sections">
    <form action="{{route('admin/user.store')}}" method="post" class="create">
        @csrf
        <h1>create user</h1>
    <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="name">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">
        <select name="roles[]" multiple id="permission">
        <option value="">--Select Role--</option>
          @foreach($RoleData as $_role)
          <option value="{{$_role->id}}">{{$_role->name}}</option>
          @endforeach
        </select>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" class="pass" id="password" name="password" value="password">
        <button class="submit" name="submit">submit</button>
    </form>
</section>
</body>
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</html>