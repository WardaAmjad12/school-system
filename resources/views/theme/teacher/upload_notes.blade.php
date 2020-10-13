@include('theme.teacher.navbar')
<br><br><br><br>
<form action="{{url('/uploads/notes')}}" method="post">
	{{csrf_field()}}
<div class="form-group">
     <label class="bmd-label-floating"><span class="material-icons" style="font-size: 98px;color: purple">
picture_as_pdf
</span><br>Upload PDF File</label></div>

 <div class="col-md-4">
     	   <input type="file" class="form-control" name="upload_pdf" id="upload_file">
     
     <button type="upload" class="btn btn-primary" value="PDF_save" name="submit">Save</button>
     </div>

<div class="form-group">
     <label class="control-label col-md-4" style="font-size: 30px solid"><span class="material-icons" style="font-size: 98px;color: purple">
insert_photo
</span><br>Upload Pictures</label></div>

 <div class="col-md-4">
     	   <input class="form-control" type="file" name="upload_pics" id="upload_file">
     <button type="upload" class="btn btn-primary" value="Pics_save" name="submit">Save</button>
</div>
<div class="form-group">
     <label for="upload_file" class="control-label col-md-4" style="font-size: 30px solid"><span class="material-icons" style="font-size: 98px;color: purple">
post_add
</span><br>Upload Documents</label>

 <div class="col-md-4">
     	   <input class="form-control" type="file" name="upload_docs" id="upload_file">
     </div>
     <button type="upload" class="btn btn-primary" value="Docs_save" name="submit">Save</button>
</div>
</form>
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