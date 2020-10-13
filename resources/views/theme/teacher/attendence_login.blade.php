@include('theme.teacher.navbar')
<br><br><br><br>
    <table class="table table-bordered" style="background-color: white">

    	<tr>
    		<th>
    			Teacher Name
    		</th>
    		<th>
    			Class
    		</th>
    		<th>
    			Section
    		</th>
    		
    	</tr>
    	
    	<tr>
    		<td>
    			{{$profile->name}}
    		</td>
    		<td>
    			{{$profile->class}}
    		</td>
    		<td>
    			{{$profile->section}}
    		</td>

    	</tr>
      
        <tr>
          <th>Student Name</th>
          <th>Roll No</th>
        </tr>
      
    	@foreach($records as $key=>$r)
      <tr>
        
        <td>{{$r->name}}</td>
        <td>{{$r->roll_no}}</td>
      </tr>
      @endforeach
    </table>
    
    <div align="center">
      <a href="{{route('export-excel.excel')}}"
      class="btn btn-success">Export to Excel</a>
    </div>
    <div align="center">
      <form action="{{url('/excel_store')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
        <input type="file" class="form-control" name="import_file">
        <button type="upload" class="btn btn-primary pull-right" value="update" name="submit">Upload Attendence File</button>
      </form>
      
    </div>
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