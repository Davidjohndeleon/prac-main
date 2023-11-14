<div class="row justify-content-between">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout.app')
    
    @section('content')
    
    <h1 style="text-align: center">Order Detail</h1>
    
    <div class="jumbotron">
    <table class="table table-striped">

    <thread>
        <tr>
            <th>Order Detail ID</th>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Subtotal</th>
    
        </tr>
    </thread>
    
    <tbody>
    
        @foreach ($orderdetails as $orderdetail )
        <tr>
           
           <td>{{ $orderdetail->orderdetail_ID }}</td>
           <td>{{ $orderdetail->order_ID}}</td>
           <td>{{ $orderdetail->product_id }}</td>
           <td>{{ $orderdetail->quantity}}</td>
           <td>{{ $orderdetail->subtotal}}</td>
       </tr> 
           @endforeach
             
           
    
    <tbody>
        <td>qwerty</td>
        <td>qwerty</td>
        <td>qwerty</td>
        <td>qwerty</td>
        <td>qwerty</td>
    
    </tbody>
    </div>
    
        <div class="row">
            <form>
    
                <label class="span 1" ><h6>Order Detail</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 1" ><h6>Order ID</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 1" ><h6>Product ID</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 1" ><h6>Quantity</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">

                
                <label class="span 1" ><h6>Subtotal</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
    
    
    
                <div class="span 1">
                    <select name="type" id="type">
                        <option value="Add" pattern="ADD" >ADD</option>
                        <option value="Remove" pattern="Remove" >REMOVE</option>
                    </select>
                </div>
                <div class="span 1" >
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
            <br>
    </div>
    @endsection
    
    @section('title')
        Order Detail
    @endsection
