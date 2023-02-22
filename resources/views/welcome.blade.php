<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
</head>
<body>
<div class="login-form-bd">
  <div class="form-wrapper">
    <div class="form-container">
      <h1> Please Login</h1>
      <form action="{{route('login.store')}}" method="post">
        @csrf
        <div class="form-control">
          <input type="text" name="email">
          <label> Email</label>
        </div>

        <div class="form-control">
          <input type="password" name="password">
          <label> Password</label>
        </div>
        <button class="login-btn">Login</button>
        <p class="text">Don't have an account? <a href="{{route('register.create')}}">Register</a></p>
      </form>
    </div>
  </div>
</div>
</body>
<script>
    const labels = document.querySelectorAll(".form-control label");

labels.forEach((label) => {
  label.innerHTML = label.innerText
    .split("")
    .map(
      (letter, idx) =>
        `<span style="transition-delay:${idx * 50}ms">${letter}</span>`
    )
    .join("");
});

</script>
</html>