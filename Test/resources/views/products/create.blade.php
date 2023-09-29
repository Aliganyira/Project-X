<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
             <label>Name</label>
             <input type="text" name="name" placeholder="Enter name here" />
        </div>
        <div>
            <label>Quantity</label>
             <input type="text" name="qty" placeholder="Enter quantity here" />
        </div>
        <div>
            <label>Price</label>
             <input type="text" name="price" placeholder="Enter price here" />
        </div>
        <div>
             <label>Description</label>
             <input type="text" name="description" placeholder="Enter description here" />
        </div>
       <div>
        <input type="submit" value="Save">
       </div>
    </form>
</body>
</html>