<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <div class="card">
             <h1>Product List</h1>
            <table border="1" cellpadding="10">
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>

                @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                        <a href="/products/edit/{{$product->id}}">Edit</a>
                        |
                        <a href="/products/delete/{{$product->id}}" onclick="return confirm('Are you sure you want to delete this Product?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>