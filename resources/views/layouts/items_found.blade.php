<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>page</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link href="/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Link Bootstrap.min.js -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12f.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- fontawsome -->
	    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	</head>
	<body style="background-color: #f5f5f5;">
		<main>
			<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff !important;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#"><img src="gumshoda.jpeg" class="img-rounded" style="margin-left: 50px !important; height: 45px;" alt="Cinque Terre"></a>
				<ul class="navbar-nav ml-5 mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
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
						<a style="color: black !important; margin-left: -183px;" href="/lostandfound" data-toggle="modal" data-target="#Post_modal">Post an item</a>
					</li>

					<li class="nav-item active mt-1" style="margin-left: -64px;">
						Welcome {{ Auth::user()->first_name}}
					</li>
					<li class="nav-item activeml-4">
	                    <a class="dropdown-item" href="{{ route('logout') }}"
	                       onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">
	                        Logout
	                    </a>

	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
	                </div>
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
		<!-- navbar ends -->
		<div class="container mt-5">
			<h2 class="text-center mb-5">{{$status}}</h2>
			<div class="row">
				<div class="col-sm-3">
					<div class="card" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title">Filters</h5>
							<div class="form-row mt-4">
								<div class="col">
									<label for="exampleFormControlSelect1">Category</label>
									<select class="form-control" name="category" id="exampleFormControlSelect1">
										<option>electronics</option>
										<option>Clothing</option>
										<option>vehicles</option>
										<option>animals</option>
									</select>
								</div>
							</div>
							<div class="form-row mt-4">
								<div class="col">
									<label for="exampleFormControlSelect1">Location</label>
									<select class="form-control" name="Province" id="exampleFormControlSelect1">
										<option>Kabul</option>
										<option>Kandahar</option>
										<option>Herat</option>
										<option>Nanagarhar</option>
										<option>Mazar</option>
										<option>Logar</option>
										<option>Laghman</option>
										<option>Noristan</option>
										<option>Nimroz</option>
										<option>Helmand</option>
										<option>Farah</option>
										<option>Badghis</option>
										<option>Khost</option>
										<option>Konar</option>
										<option>Faryab</option>
										<option>Ghazni</option>
										<option>Wardak</option>
										<option>Zabul</option>
										<option>Daykondi</option>
										<option>Badakhshan</option>
										<option>Bamiyan</option>
										<option>Takhar</option>
										<option>Kondos</option>
										<option>Samangan</option>
									</select>
								</div>
							</div>
							<div class="col-sm-14 mt-4 mb-5">
								<label for="exampleFormControlSelect1">Date</label>
								<input type="date" class="form-control" name="date" placeholder="enter date">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9" style="background-color: transparent;border:none;">
					<div class="row">
						@if($items)
						@foreach($items as $item)
						<div class="col-sm-4">
							<!-- card 1 -->
							<div class="card mb-5" >
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
								</div>
								<div class="card-footer px-0 py-0">
									<a class="btn btn-default btn-xs contact-btn" data-toggle="modal" data-target="#contact_modal"><i class="fa fa-phone"></i>&nbsp;Contact</a>
									<a class="btn btn-default btn-xs view-btn" data-toggle="modal" data-target="#view_modal"><i class="fa fa-eye"></i>&nbsp;Quick View</a>
								</div>
							</div>
							
						</div>
						@endforeach
						@else
						<h2>No items</h2>\
						@endif
					</div>
					<!-- pagination -->
			         {{ $items->links() }}
					<nav aria-label="Page navigation example">
						<ul class="pagination d-flex justify-content-center">
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
		</div>
	</div>
</div>
</div>

<!--  contact modal -->
		<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">User profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- start -->
						<div class="row">
							<div class="col-sm-4">
								<img src="profile.jpg" class="rounded-circle w-75" alt="Cinque Terre">
							</div>
							<div class="col-sm-8">
								<h6 class="card-title">Sharif Rahimi</h6>
								<div><i class="fas fa-at"></i>&nbsp;<span>sharif_rahimi@ops.netlinks.af</span></div>
								<div><i class="fas fa-map-marker-alt mt-3"></i>&nbsp;<span>Kabul</span></div>
								<div><i class="fas fa-phone mt-3"></i>&nbsp;<span><a class="mobile" href="tel:0700876543">0700876543</a></span></div>
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
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="card1.jpeg" alt="First slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="card2.jpeg" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="card3.jpeg" alt="Third slide">
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
								<!-- ends slider -->
							</div>
							<div class="col-sm-6">
								<!-- profile -->
								<div class="media">
									<img src="profile.jpg" class="rounded-circle" alt="Cinque Terre">
									<div class="media-body ml-4">
										<h6 class="mt-0">Sharif Rahimi</h6>
										<div class="view_discription mt-2"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;<span>13-2-2018</span></div>
										
									</div>
								</div>
								<hr>
								<h6 class="mt-3 mb-3">Golden Watch</h6>
								<div><span class="mt-1">Discription:</span></div>
								<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam hic, quos, deleniti cupiditate facilis laborum.</div>
								<hr>
								<div><i class="fas fa-map-marker-alt mt-3"></i>&nbsp;&nbsp;<span>Kabul</span></div>
								<div><i class="fas fa-phone mt-3"></i>&nbsp;&nbsp;<span><a class="mobile" href="tel:0700876543">0700876543</a></span></div>
								
							</div>
						</div>
						<!-- ends here -->
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
								<textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</div>
						
						
						
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1">Category</label>
								<select class="form-control" name="category" id="category">
									
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
								<label for="exampleFormControlSelect1" class="location"></label>
								<textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</div>
						<div class="form-row mt-4">
							<div class="col">
								<label for="exampleFormControlSelect1" class="delivary-location"> Delivery Location</label>
								<textarea class="form-control " name="delivery_location" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</div>
						
						<div class="custom-file mt-5">
							<input type="file" name="image" class="custom-file-input" id="image">
							<label class="custom-file-label" name="image" for="customFile">Upload Picture</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block mt-5 mb-5">Post</button>
					</div>
				</div>
			</div>
		</form>

</main>
<script type="text/javascript" src=""></script>
</body>
</html>