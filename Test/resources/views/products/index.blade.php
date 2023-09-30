<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
    <div class="container align-items-center" style="width: 80%;">
    <h1 class="center">Products Available</h1>
    <div>
        @if(session()->has('success'))
        <div>
        {{session("success")}}
        </div>
              
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">Create a product</a>  <!--route to create product page -->
        </div>
        <table border="1" class="table align-items-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach($products as $product)

            <tr>    
                <td>{{$product->id}}</td>   
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>   
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method='post' action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <!-- <input type='submit' value='Delete' /> -->
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>

            @endforeach

        </table>
    </div>
</body>
</div>
</html>