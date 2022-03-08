<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/plugins/bootstrap.min.css')}}">
    </head>

    <body>
        <div>
            <span><b>Name :</b></span><span>{{$fname." ".$lname}}</span>
        </div>
        <div>
            <span><b>Email :</b></span><span>{{$email}}</span>
        </div>
        <div>
            <table border="1px">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Total price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    @php
                        $name = explode("---", $product->name);
                        $priceValue = explode("$", $product->price);
                    @endphp
                    <tr>
                        <td>{{$name[0]}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->qty*$priceValue[0]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
