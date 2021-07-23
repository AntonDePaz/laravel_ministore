@extends('layouts.ap')

@section('content')



	
    <h4>PAYMENT TRANSACTION</h4>
    <hr>
    <div class="col-md-6">
            <strong>Available Products List</strong>
            <table class="table table-striped">
                <thead>
                    <th>No.</th>
                    <th>Product Description</th>
                    <th>Quantity</th>
                    <th>Selling Price</th>
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
    <div class="col-md-6 my-5">
    <b>Order Products List</b>
            <table class="table table-striped">
                <thead>
                    <th>No.</th>
                    <th>Product Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
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
    
   
  
  

  
  


@endsection