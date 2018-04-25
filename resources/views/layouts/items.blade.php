<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
  	 <link href="/css/custom.css" rel="stylesheet">
    <!-- fontawsome -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <main>
      <nav class="navbar navbar-light dashboard-nav d-flex justify-content-end" style="background-color: #f5f5f5 !important;">
  
    <img src="profile.jpg" class="rounded-circle mx-sm-5" alt="Cinque Terre">

    <div class="dropdown">
  <a class="dropdown-toggle mx-sm-5" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->first_name}}
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Signout</a>
     <a class="dropdown-item" href="#">Account Setting</a>
  </div>
</div>
</nav>

<div class="">
  <div class="row">
    <div class="col-sm-3">
      <!-- dashboard -->

<div class="nav-side-menu" style="margin-top: 0px; z-index: 999999;">
    <div class="brand"><img src="gumshoda1.png" class="img-rounded"></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#" style="display: block;">
                  <i class="fas fa-tachometer-alt"></i> Dashboard
                  </a>
                </li>

                 <li>
                  <a href="{{ url('categorymanagement') }}" style="display: block;">
                  <i class="fa fa-user fa-lg"></i> Category Management
                  </a>
                  </li>

                 <li>
                  <a href="{{ url('user') }}" style="display: block;">
                  <i class="fa fa-user fa-lg"></i> User management
                  </a>
                </li>
                <li>
                  <a href="{{ url('feedback') }}" style="display: block;">
                  <i class="fa fa-users fa-lg"></i> Feedback
                  </a>
                </li>
                <li>
                  <a href="{{ url('items') }}" style="display: block;">
                  <i class="fa fa-users fa-lg"></i> Items
                  </a>
                </li>
                <li>
                  <a href="#" style="display: block;">
                  <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>
    </div>
   
   <div class="card mt-5" style="width: 950px;">
  <div class="card-body">
    <h4 class="card-title text-center">Posted Items</h4>
    <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
      <th scope="col">User</th>
      <th scope="col">Date</th>
      <th scope="col">Location</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
      	 <form class="form-inline w-25">
      <input class="form-control2 mr-sm-2 " style="height: 30px;" type="search" placeholder="Search" aria-label="Search">
    </form>
      </th>
      <td>
      
      </td>

      <td>
      	 <select class="form-control" name="category" style="height: 30px;" id="exampleFormControlSelect1">
										<option>electronics & acccessories</option>
										<option>Clothing</option>
										<option>vehicles</option>
										<option>animals</option>
									</select>
      </td>
      <td>
      		<select class="form-control" style="height: 30px;" name="category" id="exampleFormControlSelect1">
										<option>lost</option>
										<option>found</option>
										
									
									</select>
      </td>
      <td>
      	 <form class="form-inline w-25">
      <input class="form-control2 mr-sm-2 " style="height: 30px;" type="search" placeholder="Search" aria-label="Search">
    </form>
      </td>
      <td>
      	
      </td>
      <td>
      
      	
      </td>
      <td>
      </td>
    </tr>
    @foreach($items as $item)
    <tr>
    	<td>
    		{{$item->title}}
    	</td>
    	<td style="width: 300px;">
    		{{$item->description}}
    	</td>
    	<td style="width: 155px;">
    		{{$item->category->category ?? 'No category defind'}}
    	</td>
    	<td style="width: 146px;">
    		{{$item->status}}
    	</td>
    	<td>
    		{{$item->user->first_name .' '. $item->user->last_name}}
    	</td>
    	<td style="width: 163px;">
    		{{$item->created_at}}
    	</td>
    	<td>
    		{{$item->location}}
    	</td>
    	
    	<td>
    		<div class="dropdown">
          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bars"></i>
          </button>
          <div class="dropdown-menu style=" style="min-width: 0px;" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>&nbsp;Edit</a>
            <a class="dropdown-item" href="#"><i class="fas fa-trash"></i>&nbsp;Delete</a>
          </div>
        </div>
    	</td>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
 {{$items->links()}}
  </div>
</main>
</body>
</html>
  

