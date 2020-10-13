@include('theme.student.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
       
        
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
      
      </ul>
    </div>
  </div>

  @include('theme.js')
</body>

</html>
