@include('theme.admin.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <form action="/timetable_save" method="POST">
                    {{csrf_field()}}
                  <div class="table-responsive">

                    <table class="table table-bordered" id="curd_table">
                      <thead class=" text-primary">
                        <th>
                          Class
                        </th>
                        <th>
                          Section
                        </th>
                        <th>
                          Teacher
                        </th>
                        <th>
                          Subject
                        </th>
                        <th>
                          Time
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                             <td>
                            <input type="text" name="class_name[]">
                          </td>
                          <td>
                            <input type="text" name="section_name[]">
                          </td>
                          <td>
                            <input type="text" name="teacher_name[]">
                          </td>
                          <td>
                            <input type="text" name="subject_name[]">
                          </td>
                          <td>
                            <input type="text" name="time[]">
                          </td>
                        </tr>
                      </tbody>
                    </table>

<div align="right">
                      <button type="button" name="add" id="add" class="btn btn-success">+</button>
                    </div>
                    <div align="center">
                    <input  type="submit" name="save" id="save" class="btn btn-info" value="Save">
                   </div> 
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          Sr#
                        </th>
                        <th>
                          Class
                        </th>
                        <th>
                          Section
                        </th>
                        <th>
                          Teacher
                        </th>
                        <th>
                          Subject
                        </th>
                        <th>
                          Time
                        </th>
                      </thead>
                      <tbody>
                        @forelse($data as $d)
                        <tr>
                          <td>
                            {{$d->id}}
                          </td>
                          <td>
                            {{$d->class_name}}
                          </td>
                          <td>
                            {{$d->section_name}}
                          </td>
                          <td>
                            {{$d->teacher_name}}
                          </td>
                          <td>
                            {{$d->subject_name}}
                          </td>
                          <td>
                           {{$d->time}}
                          </td>
                        </tr>
                     
                        </tr>
                      @empty
                          <tr><td colspan="6" style="text-align: center;"> NO Recorsds are there</td></tr>
                        @endforelse
                      </tbody>
                    </table>
                    <a href="{{route('del.timetable')}}">
                    <button type="button" name="delete_table" id="delete_table" class="btn btn-danger">Delete Time Table</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
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
        
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        
      </ul>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
    var count =1;
    $('#add').click(function(){
      count = count + 1;
      var html_code = "<tr id='row"+ count +"'>";
      html_code += "<td><input type='text' name='class_name[]'></td>";
      html_code += "<td><input type='text' name='section_name[]'></td>";
      html_code += "<td><input type='text' name='teacher_name[]'></td>";
      html_code += "<td><input type='text' name='subject_name[]'></td>";
      html_code += "<td><input type='text' name='time[]'></td>";
      html_code += "<td><button type='button' name='remove' data-row='row"+count +"' class='btn btn-warning remove'>-</button></td>";
      html_code += "</tr>";
      $('#curd_table').append(html_code);

    });
    $(document).on('click','.remove', function(){
      var delete_row = $(this).data("row");
      $('#'+ delete_row).remove();
    });
  });
  </script>
  @include('theme.js')
</body>

</html>
