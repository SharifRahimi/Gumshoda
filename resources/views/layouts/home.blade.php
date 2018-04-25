<!doctype html>
<html>
	<head>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Gumshoda.af</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- responsive tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Link Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Link Jquery -->
		<!-- Link Bootstrap.min.js -->
		
		<link href="/css/custom.css" rel="stylesheet">
	</head>
	<body style="background-color: #f5f5f5;">

		<!-- contact modal -->
		<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">User profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="item-modal-user-detail">
						<!-- start -->
						<div class="row">
							<img style="width:100px ;height:100px; position:absolute; left:191px; top:40px; visibility: hidden;" src="/images/loading.gif" id="loading">
							<div class="col-sm-4">
								<img src="profile.jpg" class="rounded-circle w-75" alt="Cinque Terre">
							</div>
							<div class="col-sm-8">
								<h6 class="card-title" id="item-user-name"></h6>
								<div><i class="fas fa-at"></i>&nbsp;<span id="item-user-email"></span></div>
								<div><i class="fas fa-map-marker-alt mt-3"></i>&nbsp;<span id="item-user-location"></span></div>
								<div><i class="fas fa-phone mt-3"></i>&nbsp;<span><a class="mobile" href="" id="user-contact-number"></a></span></div>
							</div>
						</div>
						<!-- finish -->
						<div class="row border-top mt-5">
							<div class="col-sm">
								<div class="form-group mt-4">
									<label for="exampleTextarea">Send a message</label>
									<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
									<button type="button" class="btn btn-secondary mt-3">Send</button>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="modal-footer">
											
					</div> -->
				</div>
			</div>
		</div>
		
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff !important;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#"><img src="gumshoda.jpeg" class="img-rounded" style="margin-left: 50px !important; height: 45px;" alt="Cinque Terre"></a>
				<ul class="navbar-nav ml-5 mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/lost_items">Lost</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/found_items">Found</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0 ml-5  pl-3 position-relative">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button type="submit" class="search">
					<i class="fas fa-search"></i>
					</button>
					
				</form>
				@if(Auth::check())
				<ul class="navbar-nav  mt-2 mt-lg-0">
					<li class="nav-item active mt-1">
						<a style="color: black !important; margin-left: -183px;" href="/lost" data-toggle="modal" data-target="#Post_modal">Post an item</a>
					</li>
					<li class="nav-item active mt-1" style="margin-left: -64px;">
						Welcome {{ Auth::user()->first_name}}
					</li>
					<li class="nav-item active ml-4">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Logout
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					
				</li>
			</ul>
			@else
			<ul class="navbar-nav  mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1">SignUp</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
				</li>
			</ul>
			@endif
		</div>
	</nav>
	<!-- slider -->
	<div id="carousel_slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner mt-0">
			<div class="carousel-item active">
				<img class="d-block w-100" src="slider1.jpeg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="slider2.jpeg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="slider3.jpeg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- card section 1 -->
	<div class="container mt-5 pt-2">
		<h2 class="text-center">Latest Items</h2>
		<div class="row">
			@foreach($items as $item)
			<div class="col-sm-3 mt-5">
				<!-- card 1 -->
				<div class="card" >
					@foreach($item->images->take(1) as $image)
					<img class="card-img-top" style="height: 150px;" src='/images/{{$image->image}}' alt="Card image cap">
					@endforeach
					@if($item->status === 'Found')
					<span class="badge badge-success position-absolute">found</span>
					@else
					<span class="badge badge-danger position-absolute">Lost</span>
					@endif
					<div class="card-body">
						<h6 class="card-title text-center">{{$item->title}}</h6>
						<!-- <b>{{$item->created_at->diffForHumans()}}</b> -->
					</div>
					<div class="card-footer px-0 py-0">
						<a class="btn btn-default btn-xs contact-btn view_contact" item_id="{{$item->id}}" data-toggle="modal" data-target="#contact_modal"><i class="fa fa-phone"></i>&nbsp;Contact</a>
						<a class="btn btn-default btn-xs view-btn quick_view" item_id="{{$item->id}}"  data-toggle="modal" data-target="#view_modal"><i class="fa fa-eye"></i>&nbsp;Quick View</a>
					</div>
				</div>
				
			</div>
			@endforeach
		</div>
	</div>
	
	{{ $items->links() }}
	<!-- pagination -->
	<div class="row text-center mt-5">
		<div class="col-sm">
			<nav aria-label="page navigation example" class="d-inline-block">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item"><a class="page-link" href="#">6</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- footer -->
	<div class="footer mt-5  pt-5">
		<div class="container mt-5">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer_title">
						<img src="gumshoda.jpeg" class="img-rounded" alt="Cinque Terre">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="footer_tags text-center">
						<a href="#" style="color: white;">home</a> <span>|</span> <a href="#" style="color: white;">Found</a> <span>|</span> <a href="#" style="color: white;">Lost</a>
					</div>
				</div>
				<div class="col-sm-4">
					Social media
				</div>
			</div>
		</div>
	</div>
	
	
	<!--  View Modal -->
	<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="exampleModalLabel11">Item description</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- modal body -->
					<div class="row">
						<div class="col-sm-6">
							<!-- slider -->
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" id="ImagesList">
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!-- ends slider -->
						</div>
						<div class="col-sm-6">
							<!-- profile -->
							<div class="media">
								<img src="profile.jpg" class="rounded-circle" alt="Cinque Terre">
								<div class="media-body ml-4">
									<div class="view_discription mt-2"><i  class="far fa-calendar-alt"></i>&nbsp;&nbsp;<span id="quick-view-date" id="quick-view-date"></span></div>
									
								</div>
							</div>
							<hr>
							<h6 class="mt-3 mb-3" id="quick-view-title"></h6>
							<div><span class="mt-1" id="quick-view-description"></span></div>
							<hr>
							<div><i class="fas fa-map-marker-alt mt-3"></i>&nbsp;&nbsp;<span id="quick-view-address">Kabul</span></div>
							<div><i class="fas fa-phone mt-3"></i>&nbsp;&nbsp;<span><a class="mobile" id="quick-view-mobile" href="tel:0700876543"></a></span></div>
							
						</div>
					</div>
					<!-- ends here -->
				</div>
				<!-- <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			</div>
		</div>
	</div>
	<!-- login Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel_login">please enter credintials</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group row">
							<label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
							<div class="col-md-6">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
								@if ($errors->has('password'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 offset-md-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
								Login
								</button>
								<a class="btn btn-link" href="{{ route('password.request') }}">
									Forgot Your Password?
								</a>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="Post_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-headers">
					<h5 class="modal-title text-center mt-5" id="exampleModalLabel">Post Your Item Here</h5>
					<button type="button" class="close" data-dismiss="modal" style="margin-top: -74px;
					margin-right: 9px;" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- modal body -->
					<form action="/post/create" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-row">
							<div class="col">
								<label for="exampleFormControlSelect1">Item title</label>
								<input type="text" class="form-control" name="item_title" placeholder="enter the title">
							</div>
							
							
						</div>
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1" class="category">Description</label>
								<textarea class="form-control " name="description" id="exampleFormControlTextarea111" rows="3"></textarea>
							</div>
						</div>
						
						
						
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1">Category</label>
								<select class="form-control" name="category" id="category">
									@foreach($categories as $key=> $category)
									<option value='{{$key+1}}'>{{$category->category}}</option>
									@endforeach
								</select>
							</div>
							<div class="col">
								<label for="exampleFormControlSelect1">Subcategory</label>
								<select class="form-control" name="sub_category" id="sub_category">
									<option value="2">Iphone</option>
									<option value="3">laptop</option>
									<option value="4">Disktop</option>
								</select>
							</div>
						</div>
						
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1">Status</label>
								<select class="form-control" name="status" id="status">
									<option>Lost</option>
									<option>Found</option>
								</select>
							</div>
						</div>
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1" class="location">Location</label>
								<textarea class="form-control " name="description" id="exampleFormControlTextarea12" rows="3"></textarea>
							</div>
						</div>
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1" class="delivary-location"> Delivery Location</label>
								<textarea class="form-control " name="delivery_location" id="exampleFormControlTextarea13" rows="3"></textarea>
							</div>
						</div>
						
						<div class="custom-file mt-5">
							<input type="file" name="image" class="custom-file-input" id="image">
							<label class="custom-file-label" name="image" for="customFile">Upload Picture</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block mt-5 mb-5">Post</button>
					</div>
				</form>
			</div>
		
		<!-- modal body -->
		<!-- register modal -->
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel_register">Register to Join</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<form class="form" role="form" method="POST" action="/user/register">
							@csrf
							<div class="form-group">
								<input id="First_name" name="firstName" placeholder="First Name" class="form-control form-control-sm" type="text" required="">
							</div>
							<div class="form-group">
								<input id="last_name" placeholder="Last Name" name="lastName" class="form-control form-control-sm" type="text" required="">
							</div>
							<div class="form-group">
								<input id="mobile_no" placeholder="Enter your mobile Number" name="mobile" class="form-control form-control-sm" type="text" required="">
							</div>
							<div class="form-group">
								<input id="emailInput" placeholder="Email" name="email" class="form-control form-control-sm" type="text" required="">
							</div>
							<div class="form-group">
								<input id="reg_password" placeholder="Password" name="password" class="form-control form-control-sm" type="password" required="">
							</div>
							<div class="form-group">
								<input id="confirm_password" placeholder="Confirm Password" name="password_confirmation" class="form-control form-control-sm" type="password" required="">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Register</button>
							</div>
						</form>
						<div class="form-group text-xs-center">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="feedback">
			<div class="feedback-form">
				<form action="/home" method="POST" role="form">
					{{ csrf_field() }}
					<legend>What do you think about us?</legend>
					
					<div class="form-group">
						<!-- <label for="">label</label> -->
						<textarea type="text" name="comment" class="form-control" id="" placeholder="write to us"></textarea>
					</div>
					
					
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="feedback-button">
				Feedback
			</div>
		</div>
		
		
		<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12f.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- FontAwesome CDN -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<script type="text/javascript">

			
			$(document).ready(function(){
				$('.feedback-button').on('click', function(){
					$(this).parent('.feedback').toggleClass('active');
				});
			});
		</script>
		<script>
			
			$('.view_contact').on('click',function(){
				var item_id = $(this).attr('item_id');
				$('#contact_modal').modal('show');
				var data={item_id:item_id,method:'get'};
		
				$.ajax({
					url:'/item/'+item_id+'/show/contact/',
					type: 'get',
					dataType: "JSON",
					data: data,
					beforeSend: function() {
		//            $('#item-user-name').html("Loading...");
					$("#loading").css('visibility','visible');
			},
				success: function(msg)
				{
					$("#loading").css('visibility','hidden');
						$('#item-user-name').html(msg.user.first_name);
						$('#item-user-email').html(msg.user.email);
						$('#item-user-location').html(msg.item.location);
						$('#user-contact-number').html(msg.user.Mobile);
				}
				});
			});
			// quick view
			$('.quick_view').on('click',function(){
				var item_id = $(this).attr('item_id');
				$('#view_modal').modal('show');
				var data={item_id:item_id,method:'get'};
				$.ajax({
					url:'/item/'+item_id+'/show/quick/view',
					type: 'get',
					dataType:'JSON',
					data: data,
					success:function(msg)
		{
		$('#quick-view-name').html(msg.user.first_name);
		$('#quick-view-date').html(msg.item.created_at);
		$('#quick-view-title').html(msg.item.title);
		$('#quick-view-description').html(msg.item.description);
		$('#quick-view-address').html(msg.item.location);
		$('#quick-view-mobile').html(msg.user.Mobile);
		
		var output = [];
		var counter = 1;
		$.each(msg.images,function(index,x){
		if(counter == 1){
		output.push('<div class="carousel-item active">');
												}
											else{
											output.push('<div class="carousel-item">');
												}
													output.push('<img class="d-block w-100" src="/images/'+x.image+'" alt="First slide">');
											output.push('</div>');
											counter++;
			});
			$('#ImagesList').html(output.join(""));
			}
					});
				});
			
			</script>
		</body>
	</html>