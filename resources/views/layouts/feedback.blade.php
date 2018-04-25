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
  </head>
  <body>
    <main>

    	<nav class="navbar navbar-light dashboard-nav bg-light d-flex justify-content-end">
  
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
                  <a href="" style="display: block;">
                  <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>
    </div>
      <!-- card -->
    <div class="card mt-5 ml-5 mr-5" style="width: 800px;">
  <div class="card-body">
    <h4 class="card-title text-center">Feedbacks</h4>
    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Comment</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width: 207px;">
          <form class="form-inline w-25">
      <input class="form-control2 mr-sm-2 " style="height: 30px;" type="search" placeholder="Search" aria-label="Search">
    </form>
        </td>
        <td>
          
        </td>
        <td>
          
        </td>
      </tr>
      @foreach($feedbacks as $feedback)
      <tr>
        <td>
          {{$feedback->user->first_name ?? 'Guest'}}
        </td>
        <td>{{$feedback-> feedback}}</td>
        <td>{{$feedback->created_at}}</td>
        <td>  <div class="dropdown">
          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bars"></i>
          </button>
          <div class="dropdown-menu" style="min-width: 0px;" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/feedback/{{$feedback->id}}/delete"><i class="fas fa-trash"></i>&nbsp;Delete</a>
          </div>
        </div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$feedbacks->links()}}
  </div>
</div>

    </main>
    <script type="text/javascript" src=""></script>
  </body>
</html>