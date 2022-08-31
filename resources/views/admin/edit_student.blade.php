


<!DOCTYPE html>
<html>
  <head> 
 @include('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
 @include('admin.navbar')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
     @include('admin.skin')








<div class="container">

    <h1 style="text-align:center; font-size:33px; color:white">EDIT STUDENT</h1>


    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif


<form action="{{url('/update_student', $data->id)}}" class="form" method="post" enctype="multipart/form-data">
                            @csrf
                      <div class="form-group">
                        <label for="title">Matric No:</label>
                        <input  value="{{$data->matric}}" type="text" name="matric" class="form-control" style="color:tomato; font-size:22px" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Name:</label>
                        <input value="{{$data->name}}" type="text" name="name" class="form-control" style="color:tomato; font-size:22px" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Email:</label>
                        <input value="{{$data->email}}" type="email" name="email" class="form-control" style="color:tomato; font-size:22px" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Phone:</label>
                        <input value="{{$data->phone}}" type="num" name="phone" class="form-control" style="color:tomato; font-size:22px" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Address:</label>
                        <input value="{{$data->address}}" type="text" name="address" class="form-control" style="color:tomato; font-size:22px" required>
                      </div>
   
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update">
                      </div>
 </form> 


</div>















     
      </div>
    </div>
    <!-- JavaScript files-->
@include('admin.script')
  </body>
</html>
