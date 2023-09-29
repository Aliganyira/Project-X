<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit  a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">  <!-- call product route and pass data -->
        @csrf 
        @method('put')
        <div>
             <label>Name</label>
             <input type="text" name="name" placeholder="Enter name here" value="{{$product->name}}" />
        </div>
        <div>
            <label>Quantity</label>
             <input type="text" name="qty" placeholder="Enter quantity here" value="{{$product->qty}}" />
        </div>
        <div>
            <label>Price</label>
             <input type="text" name="price" placeholder="Enter price here" value="{{$product->price}}" />
        </div>
        <div>
             <label>Description</label>
             <input type="text" name="description" placeholder="Enter description here" value="{{$product->description}}" />
        </div>
       <div>
        <input type="submit" value="update">
       </div>
    </form>
</body>
</html>