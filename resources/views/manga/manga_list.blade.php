<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangakakeibo/Home</title>
    <link rel="stylesheet" href="{{asset('css/manga_list.css')}}">
</head>
<body>
    <p>USER: {{$user->name}}</p>
    <h1>合計金額:{{$total_price}}円</h1>
    <ol class="manga_list">
    @foreach($items as $item)
        <li>
            <span class="name">{{$item->name}}</span>
            <span class="price">{{$item->price}}冊</span>
            <span class="purchase_number">{{$item->purchase_number}}円</span>
            <span class="total_price">合計{{$item->getTotalPrice()}}円</span>
        </li>
    @endforeach
    </ol>
    <a href="{{route('manga.add')}}">追加</a>
    
    
</body>
</html>