@include('theme.admin.navbar')

            <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Teacher</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="{{route('save.teacher')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                     
                    
                      <div class="col-md-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="name" >
                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                      </div>
                      <input type="hidden" name="id" >
                      <div class="col-md-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email">
                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="pass">
                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" name="fname"  >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="lname">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" name="address">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID No</label>
                          <input type="text" class="form-control" name="id_no">
                        </div>
                      </div>
        
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control" name="Pcode" >
                        </div>
                      </div>
                    <div class="row">
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="">
                        </div>
                      </div> -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="city" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone No</label>
                          <input type="text" class="form-control" name="phone" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          <select name="class" class="form-control">
   <option selected>select class</option>
  <option value="play-group">play-group</option>
  <option value="nursery">nursery</option>
  <option value="prep">prep</option>
  <option value="one">one</option>
  <option value="two">two</option>
  <option value="three">three</option>
  <option value="four">four</option>
  <option value="five">five</option>
  <option value="six">six</option>
  <option value="seven">seven</option>
  <option value="eight">eight</option>
  <option value="nine">nine</option>
  <option value="ten">ten</option>
</select>
                        
                      </div>
                      </div>
    
                         <div class="col-md-4">
                        <div class="form-group">
                          <select name="section" class="form-control">
   <option selected>select section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
                        
                      </div>
                      </div>
                          <div class="col-md-4">
                        <div class="form-group">
                          <select name="subject" class="form-control">
   <option selected>select subject</option>
  <option value="English">English</option>
  <option value="Urdu">Urdu</option>
  <option value="Math">Math</option>
  <option value="Islamiyat">Islamiyat</option>
  <option value="Pak Study">Pak Study</option>
  <option value="Science">Science</option>
  <option value="Physics">Physics</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Biology">Biology</option>
  <option value="Drawing">Drawing</option>
</select>
                        
                      </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                         
                          <input type="text" class="form-control" name="dob" placeholder="Date Of Birth dd/mm/yy">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="gender" class="form-control">
   <option selected>select Gender</option>
   <option value="male">Male</option>
   <option value="female">Female</option>
 </select>
</div>
</div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Add Image</label>
                        
                        </div>                                                                                       
                        <input type="file" class="form-control" name="image">
                      </div>
                      
                    </div>
                    
               
                    <button type="update" class="btn btn-primary pull-right" value="update" name="submit">Update Profile</button>
                    <button class="btn btn-primary pull-right" value="save" name="submit">Save</button>

                    <div class="clearfix"></div>
                  </form>
                
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
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  @include('theme.js')
</body>

</html>
