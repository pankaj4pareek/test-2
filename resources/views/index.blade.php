<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            @foreach($data as $pdata)
                <h1>{{$pdata->name}}</h1>
                <h2>{{$pdata->price}}</h2>
                <p>{{$pdata->description}}</p>
               <a href="{!!route('razorpay-payment',['amount'=>$pdata->price])!!}">Buy Now</a>
            @endforeach
</body>
</html>