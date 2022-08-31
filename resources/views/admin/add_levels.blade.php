


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

    <h1 style="text-align:center; font-size:33px; color:white">ADD LEVELS</h1>


    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif


    <form style"width:50%" class="form" action="{{url('upload_levels')}}" method="post" enctype="multipart/form-data">
  @csrf


            <div class="form-group">
                <label for="usr">Level ID:</label>
                <input type="text" style="color:tomato" placeholder="Enter Level Id" class="form-control" id="usr" required="required">
            </div>
            <div class="form-group">
                <label for="pwd">Level Name:</label>
                <input type="text" style="color:tomato"  placeholder="Enter Level Name" class="form-control" id="pwd" required>
            </div>

            <div class="form-group">
             <input style="background-color:green" type="submit" class="btn btn-success" value="Submit">
            </div>

</form>


</div>















     
      </div>
    </div>
    <!-- JavaScript files-->
@include('admin.script')
  </body>
</html>
