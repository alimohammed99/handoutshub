


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

    <h1 style="text-align:center; font-size:33px; color:white">200 LEVEL STUDENTS</h1> <br><br>


    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif

<div class="table-responsive">

<table style="" id="hundred_level_students" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">MATRIC NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th style="" colspan="" scope="">EDIT</th>
      <th style="" colspan="" scope="">DELETE</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $data)
  <tr style="color:white" class="table-">
      <td>{{$data->matric}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td> <a class="btn btn-info" href="{{url('edit_student', $data->id)}}">Edit</a></td>
      <td> <a class="btn btn-danger" href="{{url('delete_student', $data->id)}}">Delete</a> </td>
    </tr>
    @endforeach

  </tbody>
</table>

</div>

</div>












     
      </div>
    </div>
    <!-- JavaScript files-->
@include('admin.script')
  </body>
</html>
