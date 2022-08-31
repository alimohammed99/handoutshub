


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

    <h1 style="text-align:center; font-size:33px; color:white">ADD MATERIALS</h1>


    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif


    <form style"width:50%" class="form" action="{{url('upload_materials')}}" method="post" enctype="multipart/form-data">
  @csrf


            <div class="form-group">
                <label for="pwd">Title:</label>
                <input type="text" name="material_name"  style="color:tomato"  placeholder="Title should be just the course code number, not the full course code. E.g 112, 202, 436" class="form-control" id="pwd" required>
            </div>


            <div class="form-group">
                <label for="pwd">Material Description:</label>
                <input type="text" name="material_description"  style="color:tomato"  placeholder="Enter Course Description" class="form-control" id="pwd" required>
            </div>


            <div class="form-group">
                <label for="pwd"><span style="font-size:22px; color:red">Upload .pdf documents only:</span></label> <br>
                <input type="file" name="file" required>
            </div>

            <div class="form-group">
                <label for="pwd">Level:</label>
                <select style="background-color:white; color:black" name="level_id" id="departement" class="custom-select" >
                    <option value="">------select Student Level--------</option>
                     @foreach($data as $data)
                    <option style="color:black" value="{{$data->level_id}}" required="">{{$data->level_name}}</option>
                     @endforeach
                </select>
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
