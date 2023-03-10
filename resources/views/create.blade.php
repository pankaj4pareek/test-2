<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
  }
  
  body {
    font-family: "Roboto", sans-serif;
  }
  
  /* FORM STYLE */
  .form-wrapper {
    margin: 0 auto;
  }
  
  .login-form-bd {
    background: #316498;
    color: #fff;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
  }
  
  .form-container {
    font-family: "Poppins", sans-serif;
    font-size: 1.125rem;
    background: #1b1a1a;
    padding: 5rem 2.5rem;
    border-radius: 0.313rem;
    margin: 5rem 28.125rem;
    box-shadow: 3px 0.25rem 1.25rem rgba(27, 27, 27, 0.2);
  }
  
  .form-container h1 {
    text-align: center;
    margin-bottom: 2.75rem;
    margin-top: -1.875rem;
    color: #ffff;
    font-weight: normal;
    font-size: 2rem;
  }
  
  .form-container a {
    text-decoration: none;
    color: #e2dc20;
  }
  
  .login-btn {
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: #e2dc20;
    padding: 0.938rem;
    font-family: inherit;
    font-weight: 500;
    font-size: 1.563rem;
    color: #0d0f42;
    border: 0;
    border-radius: 0.313rem;
    margin-bottom: 1.25rem;
  }
  
  .login-btn:focus {
    outline: 0;
  }
  
  .login-btn:active {
    transform: scale(0.98);
  }
  
  .text {
    margin-top: 0.938rem;
  }
  
  .form-control {
    position: relative;
    margin: 1.25rem 0 2.5rem;
  }
  
  .form-control input {
    background: transparent;
    border: 0;
    border-bottom: 1px #fff solid;
    display: block;
    width: 100%;
    padding: 1.25rem 0;
    font-size: 1.125rem;
    color: #fff;
  }
  
  .form-control input:focus {
    outline: 0;
    border-bottom-color: #c2c25a;
  }
  
  .form-control label {
    position: absolute;
    top: 0.938rem;
    left: 10;
  }
  
  .form-control label span {
    display: inline-block;
    font-size: 1.125rem;
    min-width: 0.313rem;
    transition: 0.3s cubic-bezier(0.53, 0.246, 0.265, 1.66);
  }
  
  .form-control input:focus + label span,
  .form-control input:valid + label span {
    color: #c2c25a;
    transform: translateY(-1.875rem);
  }
  
    </style>
</head>
<body>
<div class="login-form-bd">
  <div class="form-wrapper">
    <div class="form-container">
      <h1>Registration</h1>
      <form action="{{route('admin/register.store')}}" method="post">
        @csrf
      <div class="form-control">
          <input type="text"name="name">
          <label>Name</label>
        </div>
        <div class="form-control">
          <input type="Email" name="email">
          <label> Email</label>
        </div>

        <div class="form-control">
          <input type="password" name="password">
          <label> Password</label>
        </div>
        <button class="login-btn" type="submit">Register</button>
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