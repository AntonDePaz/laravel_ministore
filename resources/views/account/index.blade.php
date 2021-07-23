@extends('layouts.ap')

@section('content')



	
    <h4>PRODUCT LIST</h4>
  
<div class="content table-responsive table-full-width">
    
        <a href="" class="btn btn-success">Add Product</a>
   
    <table class="table table-striped">
        <thead>
            <th>No.</th>
        	<th>Product Description</th>
        	<th>Quantity</th>
        	<th>Selling Price</th>
        	<th>Total Cost</th>
          <th>Action</th>
        </thead>
        <tbody>
            <tr>
            	<td>1</td>
            	<td>Dakota Rice</td>
            	<td>23 pcs</td>
            	<td>php 200.00</td>
            	<td>php 300.00</td>
              <td>
                  <div class="dropdown">
                      <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                          modify
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#paper"> <span class="text-primary">  <i class="fa fa-pencil"></i> Edit </span></a></li>
                        <li><a href="#paper"><span class="text-danger"> <i class="fa fa-trash"></i> Delete</span> </a></li>
                      </ul>
                  </div>
              </td>
            </tr>
           
        </tbody>
    </table>

</div>
  
  


@endsection