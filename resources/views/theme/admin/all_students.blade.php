@include('theme.admin.navbar')
<br><br><br>
<div class="container-fluid" style="background-color: white">
<table id="student_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pics</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Class</th>
      <th scope="col">Section</th>
      <th scope="col">Address</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Roll No</th>
      <th scope="col"></th>
    </tr>
  </thead>
 @foreach($student as $data)
   	
     <tr>
     	<td>{{$data->id}}</td>
     	<td align="center"><img src="{{asset('images/'.$data->image)}}" width="60px" height="60px" border=""></td>
      <td>{{$data->name}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->class}}</td>
      <td>{{$data->section}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->dob}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->roll_no}}</td>
      <td><a href="{{route('edit',$data->id)}}">
              <i class="material-icons">edit</i>
            </a></td>
       <td><a href="{{route('delete',$data->id)}}">
              <i class="material-icons">delete</i>
            </a></td>
       <td><a href="{{route('view',$data->id)}}">
              <i class="material-icons">visibility</i>
            </a></td>
      </tr>
  	
  @endforeach

  
</table>
</div>

<script type="text/javascript">
        //Click event handler for nav-items
$('.nav-item').on('click',function(){

  //Remove any previous active classes
  $('.nav-item').removeClass('active');

  //Add active class to the clicked item
  $(this).addClass('active');
});
      </script>
 <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
      </ul>
    </div>
  </div>
 @include('theme.js')
 
</body>

</html>
