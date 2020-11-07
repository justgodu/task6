<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{ $product->title}}</td>
                <td>{{ $product->price}}</td>
                <td>
                @if ($product->user_id == auth()->user()->id)
                <form action="{{ route('productdestroy',$product->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id}}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <form action="{{ route('productedit',$product->id)}}" method="get">
                    <button class="btn btn-warning" type="submit">Edit</button>
                </form>
                @endif
               
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>