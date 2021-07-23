<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mini Store</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('datatable\css\dataTables.bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('datatable\css\dataTables.bootstrap4.min.css') }}" >

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sweetalert\sweetalert2.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('toastr\toastr.min.css') }}" >

    <style>
        /* .table{
            box-shadow: 2px 2px 2px 2px gray;
        } */
    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li  class=" {{ request()->is('product') ? 'active' : '' }} ">
                    <a href="#"  id="idDashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
				<li  class=" {{ request()->is('product') ? 'active' : '' }} ">
                    <a href="{{ route('product.index') }}"  id="idProfile">
                        <i class="fa fa-user"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class=" {{ request()->is('payment') ? 'active' : '' }} ">
                    <a href="{{ route('payment.index') }}"  id="idProfile">
                        <i class="fa fa-user"></i>
                        <p>Payment</p>
                    </a>
                </li>

                <li  class=" {{ request()->is('report') ? 'active' : '' }} ">
                    <a href="{{ route('report.index') }}"  id="idProfile">
                        <i class="fa fa-user"></i>
                        <p>Report</p>
                    </a>
                </li>

                <li  class=" {{ request()->is('account') ? 'active' : '' }} ">
                    <a href="{{ route('account.index') }}"  id="idProfile">
                        <i class="fa fa-user"></i>
                        <p>User Account</p>
                    </a>
                </li>
				
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                
                @yield('content')

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('assets/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

   

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('assets/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/js/demo.js') }}"></script>

    <script src="{{ asset('datatable\js\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatable\js\dataTables.bootstrap4.min.js') }}"></script>


    <script src="{{ asset('sweetalert\sweetalert2.min.js') }}"></script> 
    <script src="{{ asset('toastr\toastr.min.js') }}"></script>



   
</html>

<div class="modal fade" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <form method="POST" action="{{ route('product.store') }}" id="product_form">
        @csrf
        <input type="hidden" name="p_id">
             <div class="modal-body" style="background-color: lightblue;">
      

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-8">
                                <input id="description" type="text" class="form-control is-invalid" name="description" value="{{ old('description') }}">
                                <span class="text-danger error-text description_error" role="alert"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" >

                                <span class="text-danger error-text quantity_error" role="alert"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" >

                                <span class="text-danger error-text price_error" role="alert"></span>
                            </div>
                        </div>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pull-left product_button"></button>
      </div>
      </form> 
    </div>
  </div>
</div>



<script>

 


$.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });


        $(function(){

            $('.addproduct').on('click', function(e){
                e.preventDefault();
                $('.modal-title').html('<b>ADD PRODUCT</b>');
                $('#editm').find('input[name="p_id"]').val('');
               $('.product_button').html('Add Product');
               $('#product_form').trigger('reset');
                $('#product_modal').modal('show');
            });

            $('#product_form').on('submit', function(e){
                e.preventDefault();
                var form = this;
                $.ajax({
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: new FormData(form),
                    processData: false,
                    dataType: false,
                    contentType: false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text('');
                    },
                    success:function(data){
                        if(data.code == 0){
                            $.each(data.error, function(prefix,val){
                              
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                               // $(form).find('input#'+prefix).style.borderColor = 'red';
                            });
                        }else{
                            $(form)[0].reset();
                           // alert(data.msg);

                           $('#product_modal').modal('hide')
                           $('#product_table').DataTable().ajax.reload(null,false);
                            toastr.success(data.msg);
                        }

                    }

                });
            });

            $(document).on("click", ".edit_product", function(e){

                var id = $(this).data('id');
                $('.modal-title').html('<b>UPDATE PRODUCT</b>');
               $('.product_button').html('Update Product');  
                    $.get("{{ route('product.index') }}" +'/' + id +'/edit', function (data) {
                    $('#product_modal').find('input[name="p_id"]').val(data.details.id);
                    $('#product_modal').find('input[name="description"]').val(data.details.description);
                    $('#product_modal').find('input[name="quantity"]').val(data.details.quantity);
                    $('#product_modal').find('input[name="price"]').val(data.details.price);
                    $('#product_modal').modal('show');
                 },'json');


            });

            $(document).on("click", ".del_product", function(e){
                const id = $(this).data('id')
                    swal.fire({
                        title:"Are You Sure Want to delete this Product?",
                        html: ' ',
                        showCancelButton:true,
                        showCloseButton:false,
                        cancelButtonText:'Cancel',
                        confirmButtonText:'Yes ,Delete',
                        cancelButtonColor:'#d33',
                        confirmButtonColor:'#556ee6',
                        width:500,
                        allowOutsideClick:false
                    }).then(function(result){
                        if(result.value){
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('product.store') }}"+'/'+id,
                                success: function (data) {
                                    if(data.code == 0){
                                        toastr.error(data.msg);
                                    }else{
                                       
                                       toastr.success(data.msg);
                                       $('#product_table').DataTable().ajax.reload(null,false);
                                    }
                                   
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
                           
                          
                        }
                        
                    });

                });
           
            

        });

        $('#product_table').DataTable({
            processing:true,
                info:true,
                ajax: "{{ route('getall.list') }}",
                "pageLength": 10,
                "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,'All']],
                columns:[
                    
                    {data:'DT_RowIndex', name:'DT_RowIndex'},
                    {data:'description', name:'description'},
                    {data:'quantity', name:'quantity'}, 
                    {data: 'price', name: 'price'},
                    {data:'total', name:'total'},   
                    {data:'actions', name:'actions'}
                ]
            });

      

</script>

<script type="text/javascript">
    
        $("#idDashboard").click(function(e){
            //$("#idBody").html("Hellow");

            //$(".idBody").load("example/table.html");

            $.ajax({

                url: "example/table.html",
                success: function(data){
                   $(".idBody").html(data);
                }
            });
        })
  
		$("#idProfile").click(function(e){
            
            $.ajax({

                url: "example/profile.html",
                success: function(data){
                   $(".idBody").html(data);
                }
            });
        })
		
        $(document).on("click", "#btnAlter", function(e){
            //$("#idBody").html("Hellow");

            $(".nim").hide();
        })
		
		$(document).on("click", "#btnSave", function(e){
			var str = "";
            $(".profile").each(function(){
				if ($(this).val() == ""){
					str = str + "<br>Empty " + $(this).attr("placeholder");
				}
			})
			
			if ($("#Password1").val() != $("#Password2").val()){
				str = str + "<br>Password not matched";
			}
			
			if (str != ""){
				$("#msg").html("<div class = 'alert alert-danger'>"+str+"</div>");
			}else{
				$.ajax({
					type: "post",
					url: "example/ProcessProfile.php",
					data: $("#frmProfile").serialize(),
					success: function(data){
					   $(".idBody").html(data);
					}
				});
			}
				
        })
		
		$(".menuFlag").click(function(){
			$(".menuFlag").removeClass("active");
			$(this).addClass("active");
		})
</script>