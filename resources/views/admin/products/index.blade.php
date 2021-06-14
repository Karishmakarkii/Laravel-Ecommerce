    <a href="admin/products/create">Create Products</a>
    <table>
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Action</td>

        </tr>
        <tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->product_name}}</td>
                <td>{{substr($product->product_desc, 0,50)}}</td>
                <td>{{$product->Price}}</td>
                <td>
                    <a href="#">Edit</a> | <a href="#">Delete</a>
                </td>

            </tr>
            @endforeach
        </tr>
        
    </table>
