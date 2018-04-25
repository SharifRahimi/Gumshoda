<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="/css/custom.css" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- fontawsome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
          
          <div class="card mt-5 mr-5 col-sm-8 col-sm-3 offset-sm-3">
            <div class="card-body">
              <h4 class="card-title text-center">Users</h4>
              <div><button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#admin_modal"><i>Add user</i></button></div>
              <div class="table-responsive">
                <table class="table">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        
                        <td>
                          
                        </td>
                        <td  style="width: 180px;">
                          <form class="form-inline w-25">
                            <input class="form-control2 mr-sm-2 " style="height: 30px;" type="search" placeholder="Search" aria-label="Search">
                          </form>
                        </td>
                        <td>
                          
                        </td>
                        <td>
                          
                        </td>
                        <td style="width: 194px;">
                          <select class="form-control" name="category" style="height: 30px;" id="exampleFormControlSelect1">
                            <option>Admin</option>
                            <option>User</option>
                            
                          </select>
                        </td>
                        <td>
                          
                        </td>
                      </tr>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td> 
                        <td>{{$user->first_name}}</td>                      
                        @if($user->Mobile)
                        <td>{{$user->Mobile}}</td>
                        @else
                        <td>No mobile registered</td>
                        @endif
                        <td>{{$user->email}}</td>
                        @if($user->is_admin === 0)
                        <td> user</td>
                        @else
                        <td>Admin</td>
                        @endif
                        <td>
                          <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" style="min-width: 0px;" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item editUser" id="{{$user->id}}" ><i class="fas fa-edit"></i>&nbsp;Edit</a>
                              <a class="dropdown-item deleteUser" id="{{$user->id}}"><i class="fas fa-trash"></i>&nbsp;Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </table>
              </div>
              {{ $users->links() }}
            </div>

            
        <!-- Modal -->
        <div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/register/admin" method="POST" >
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-row mt-4">
                    <div class="col">
                      <label for="exampleFormControlSelect1">First Name</label>
                      <input type="text" class="form-control" name="firstname" placeholder="first name">
                    </div>
                    <div class="col">
                      <label for="exampleFormControlSelect1">last name</label>
                      <input type="text" class="form-control" name="lastname" placeholder="last name">
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <label for="exampleFormControlSelect1">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="col">
                      <label for="exampleFormControlSelect1">type</label>
                      <select id="inputState" class="form-control" name='is_admin' style="height: 33px;">
                        <option value="1" selected>Admin</option>
                        <option value="0">User</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <label for="exampleFormControlSelect1">password</label>
                      <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="col">
                      <label for="exampleFormControlSelect1">confirm password</label>
                      <input type="password" class="form-control" name="confirm_password" placeholder="confirm password">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- edit modal -->
        <!-- edit user -->
          <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/users/update/{id}" method="POST">
                      {{ csrf_field() }}
                   <div class="form-row mt-4">
                   <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="user id">
                    <div class="col">
                      <label for="exampleFormControlSelect1">Name</label>
                      <input type="text" class="form-control" id="user_name" name="name" placeholder="user name">
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <label for="exampleFormControlSelect1">Mobile</label>
                      <input type="text" class="form-control" id="user_mobile" name="mobile" placeholder="mobile">
                    </div>
                    <div class="col">
                      <label for="exampleFormControlSelect1">Email</label>
                      <input type="text" class="form-control" id="user_mail" name="email" placeholder="email">
                    </div>
                  </div>
                  <div class="form-row mt-4">
                   <div class="col">
                      <label for="exampleFormControlSelect1">User Type</label>
                      <select class="form-control" id="user_type" name="usertype" style="height: 33px;">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer">
                  <a onclick="updateData()" class="btn btn-success">Save changes</a>
                </div>
                  </form>
              </div>
            </div>
          </div>
      </main>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript">

        $('.editUser').on('click',function(){
    
          var user_id=$(this).attr('id');
          var data ={user_id:user_id,method:'get'};
           
          $.ajax({
                  
                  url:'/users/edit/'+user_id,
                  type:'get',
                  dataType:"JSON",
                  data:data,
                  
                  success: function(msg)
                  {
                       $('#user_id').val(msg.id);
                       $('#user_name').attr("value",msg.name);
                       $('#user_mobile').attr("value",msg.mobile);
                       $('#user_mail').attr("value",msg.email);
                       $('#user_type').find('option[value='+msg.UserType+']').attr('selected','selected');

                        $('#edit_user').modal('show');

                  }

                 

          });

        })

              $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        // for save updated value
        });

      function updateData(){
          var user_id=$('#user_id').val();
          var first_name=$('#user_name').val();
          var user_mobile=$('#user_mobile').val();
          var user_email=$('#user_mail').val();
          var user_type=$('#user_type').val();
         
          var data = {
            first_name: first_name,
            user_id : user_id,
            user_mobile : user_mobile,
            user_email : user_email,
            user_type : user_type
          };


          $.ajax({

                  url:'/users/update',
                  type:'POST',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  dataType:"JSON",
                  data: data,
                   
                  success:function(msg){
                     location.reload(true);
                  },

                  error:function(msg){

                   
                 }

            });
        }


        $('.deleteUser').on('click',function(){

         swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

              var del_id= $(this).attr('id');
              var data ={del_id:del_id};

              $.ajax({

                      url:'/users/delete/'+del_id,
                      type:'DELETE',
                      dataType:'JSON',
                      data :data,
    
                      success:function(msg)
                      {      
                            
                              swal("has been deleted!", {
                                icon: "success",
                              });
                            location.reload(true);

                      }

              });
              
            } else {
              swal("Your imaginary file is safe!");
            }
          });
        
          
        
        })

      </script>
    </body>
  </html>