@include('theme.teacher.navbar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Attendence System</h4>
  
</div>

                
</div>

                <div class="panel-body">
             
                 
                </div></div></div></div></div>
<div class="container-fluid" style="background-color: #D8C4E5">
	<form method="POST" action="{{route('login.attendence')}}">
                        {{ csrf_field() }}
	<div class="col-md-4">
                        <div class="form-group">
                          <select name="class" class="form-control" style="border: 1px solid; background-color: white">
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
                          <select name="section" class="form-control" style="border: 1px solid; background-color: white">
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
                          <input type="password" name="password" style="border: 1px solid; background-color: white" placeholder="password">
                        
                      </div>
                      </div>                   
 <div class="col-md-4">
                        <div class="form-group">
                          <input type="email" name="email" style="border: 1px solid; background-color: white" placeholder="Email">
                        
                      </div>
                      </div>
 <div class="col-md-4">
                        <div class="form-group">
                          <input type="date" name="date" style="border: 1px solid; background-color: white">
                        
                      </div>
                      </div>
                      <button type="submit" name="generate" id="generate" class="btn btn-success">Generate</button>

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
