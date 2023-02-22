<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
  float: left;
  width: 100%;
}
input {
  float: left;
}
button{
    float:left;
}
    </style>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <label for="name">Status</label>
        <select name="status" id="">
            <option value="1">Enable</option>
            <option value="0">Disable</option>
        </select>
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="price">Price</label>
        <input type="text" name="price" id="">
        <label for="category">Category</label>
        <input type="text" name="category">
        <label for="descripation">Description</label>
        <input type="text" name="description">
        <label for="urlkey">url_key</label>
        <input type="text" name="url_key" id="">
        <button>Submit</button>
    </form>
</body>
</html>