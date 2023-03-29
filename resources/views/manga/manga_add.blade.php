<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/manga/add" method="post">
        <table>
            @csrf
            <tr><th>名前</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>値段</th><td><input type="text" name="price" value="{{old('price')}}"></td></tr>
            <tr><th>購入数</th><td><input type="number" name="purchase_number" value=0></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td>
        </table>
    </form>
</body>
</html>