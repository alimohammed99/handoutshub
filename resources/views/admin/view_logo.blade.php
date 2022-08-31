


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

    <h1 style="text-align:center; font-size:33px; color:white">LOGO</h1>


    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif

<div class="table-responsive">

<table style="" id="hundred_level_students" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
      <th scope="col">LOGO</th>
      <th colspan="" style="text-align:center" scope="">EDIT</th>
      <th colspan="" style="text-align:center" scope="">DELETE</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $data)
  <tr class="" style="color:white; font-size: ">
  <td><img style="height:" height="" width="" src="logoimage/{{$data->image}}" alt=""></td>
      <td style="text-align:center"> <a class="btn btn-info" style="font-size:" href="{{url('edit_logo', $data->id)}}">Edit</a> </td>
      <td style="text-align:center"> <a class="btn btn-danger" style="font-size:" href="{{url('delete_logo', $data->id)}}">Remove</a> </td>
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
