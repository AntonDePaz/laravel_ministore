@extends('layouts.ap')

@section('content')



	
    <h4>PRODUCT LIST</h4>
    <a class="btn btn-success addproduct">Add Product</a> <br>
<div class="content table-responsive table-full-width">
    
     
   
    <table class="table table-striped" id="product_table">
        <thead>
            <th>No.</th>
        	<th>Product Description</th>
        	<th>Quantity</th>
        	<th>Selling Price</th>
        	<th>Total Cost</th>
          <th>Action</th>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>
  


@endsection





