<div class="row justify-content-between">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout.app')
    
    @section('content')
    
    <h1 style="text-align: center">Product</h1>
    
    <div class="jumbotron">
      <table class="table table-striped">
    <thread>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity in Stock</th>
    
        </tr>
    </thread>
    
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->Product_Name }}</td>
            <td>{{ $product->Description }}</td>
            <td>{{ $product->Price }}</td>
            <td>{{ $product->QuantityInStock }}</td>
            <td><a href="{{route('updateProducts', $product->id)}}"><button type="button" class="btn btn-warning"> update </button></a></td>
            <td><a href="{{route('removeProducts', $product->id)}}"><button type="button" class="btn btn-danger"> delete </button></a></td>
        </tr>
        @endforeach
        
    
    </tbody>


    
    </div>
    
        <div class="row">
            <form action="{{route('saveProducts')}}" method="post">@csrf
    
                <label class="span 2" ><h6>Product Name</h6></label>
                <input class="inputs" type="text" name="Product_Name" >
    
                <label class="span 2" ><h6>Description</h6></label>
                <input class="inputs" type="text" name="Description" >
    
                <label class="span 2" ><h6>Price</h6></label>
                <input class="inputs" type="text" name="Price" >
    
                <label class="span 2" ><h6>Quantity in Stock</h6></label>
                <input class="inputs" type="text" name="QuantityInStock" >
    
                <div class="span 2" >
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
            <br>
    </div>
    @endsection
    
    @section('title')
        Product Page
    @endsection