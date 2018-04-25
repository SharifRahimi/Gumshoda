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
                    <a href="#" style="display: block;">
                      <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-8 mt-5">
            
            <h3 class="category text-center">Category Management</h3>
            <div><button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i></button></div>
            
            <hr>
            <div class="table-responsive">
              <table class="table">
                <table class="table table-striped table-borderd">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Parrent category</th>
                      <th scope="col">created at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <form class="form-inline w-25">
                          <input class="form-control2 mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                        </form>
                      </th>
                      <td>
                        <form class="form-inline w-25">
                          <input class="form-control2 mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                        </form>
                      </td>
                      <td>
                        
                      </td>
                      <td style="width: 30px;">
                        
                      </td>
                      
                    </tr>
                    @foreach($categories as $category)
                    <tr id="{{$category->id}}">
                      <td>{{$category->category}}</td>

                      <td>{{$category->parent($category->parent_id)}}</td>
                      <td>12/12/18</td>
                      <td>
                        <div class="dropdown">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-bars"></i>
                          </button>
                          <div class="dropdown-menu" style="min-width: 0px;" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item editCat" cat_id="{{$category->id}}"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                            <a class="dropdown-item deletecat" cat_id="{{$category->id}}"><i class="fas fa-trash"></i>&nbsp;Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$categories->links()}}
              </div>
            </div>
          </div>
          <!-- create modal -->
          
          <!-- edit Modal -->
          <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">create category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-row mt-4">
                    <div class="col">
                      <input type="hidden" id="cat_id" />
                      <label for="exampleFormControlSelect1 text-center">Title</label>
                      <input type="text" class="form-control" id="cat_title" name="title" placeholder="item title">
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Parrent category</label>
                        <select class="form-control cat_parent_id" name="parent" style="height: 33px;" id="parent_category">
                          <option value="2">Electronics</option>
                          <option value="3">Vehicle</option>
                          <option value="4">Pets</option>
                          <option value="1">General</option>
                          <option value="5">none</option>
                        </select>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <div class="modal-footer">
                  <button id="updateCat" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
          <!-- create modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="modal-body">
                    <form action="/dashboard/category" method="POST">
                      {{ csrf_field() }}
                      <div class="form-row mt-4">
                        <div class="col">
                          <input type="hidden" id="cat_id" />
                          <label for="exampleFormControlSelect1 text-center">Title</label>
                          <input type="text" class="form-control" id="cat_title" name="title" placeholder="item title">
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Parrent category</label>
                            <select class="form-control" name="parent" style="height: 33px;" id="parent_category">
                              <option value="2">Electronics</option>
                              <option value="3">Vehicle</option>
                              <option value="4">Pets</option>
                              <option value="1">General</option>
                              <option value="5">none</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" id="updateCat" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript">
        
        $('.editCat').on('click',function(){
        // alert('OOOPS');
        var cat_id = $(this).attr('cat_id');
        var data={cat_id:cat_id,method:'get'};
        
        $.ajax({
        url:'/category/'+cat_id+'/edit',
        type: 'get',
        dataType: "JSON",
        data: data,
        beforeSend: function() {
        $("#loading").css('visibility','visible');
        },
        success: function(msg)
        {
        $('#cat_id').val(msg.id);
        $('#cat_title').attr("value",msg.title);
        
        $('#parent_category').find('option[value='+msg.parent_id+']').attr('selected','selected');
        $('#create_modal').modal('show');
        }
        });
        })


        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        // for save updated value
        });
        $('#updateCat').on('click',function(){
        var cat_id = $('#cat_id').val();
        var cat_title = $('#cat_title').val();
        var cat_parent_id = $('#parent_category option:selected').val();
        alert(cat_parent_id);
        var data={cat_id:cat_id,method:'PUT',cat_title:cat_title ,cat_parent_id:cat_parent_id};
        $.ajax({
              url:'/category/'+cat_id+'/update',
              type: 'POST',
              dataType: "JSON",
              data: data,
              beforeSend: function() {
              // $("#loading").css('visibility','visible');
              },
              success: function(msg)
              {
                    // var id = msg.id;
                    // var title = msg.title;
                    // var parent_cat = msg.parentCategory;
                    // $('#' + id).find('td').eq(0).text(title);
                    // $('#' + id).find('td').eq(1).text(parent_cat);
                    
                    // $('#create_modal').modal('hide');
                    location.reload(true);
              }
              });
        })
        
        // delete
        $('.deletecat').on('click',function(){
        
        var del_id= $(this).attr('cat_id');
        var data={del_id:del_id,method:'delete'};
        $.ajax({
        url:'/category/'+del_id+'/delete',
        type:'delete',
        dataType:'JSON',
        data:data,
        success: function(msg)
        {
        if(msg.id > 0){
        $('#' + msg.id).remove();
        }
        }
        });
        })
        </script>
      </body>
    </html>