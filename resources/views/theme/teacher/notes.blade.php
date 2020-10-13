@include('theme.teacher.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">Learning Material</h4>
  
</div>

                
</div>

                <div class="panel-body">
             
                 
                </div></div></div></div></div>
<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a class="nav-link" href="{{route('teacher.uploadnotes')}}">
              <i class="material-icons" style="font-size: 100px">folder</i>
              <p>Upload Writen Notes</p>
            </a>
    </div>
    <div class="col-md-4">
      <a class="nav-link" href="{{route('teacher.uploadvideos')}}">
              <i class="material-icons" style="font-size: 100px">folder</i>
              <p>Upload Video Lectures</p>
            </a>
    </div>
    <div class="col-md-4">
      <a class="nav-link" href="{{route('teacher.uploadbooks')}}">
              <i class="material-icons" style="font-size: 100px">folder</i>
              <p>upload Books</p>
            </a>
    </div>
    
  </div>
  
</div>
<hr><hr><hr>
<style type="text/css">
/* Remove default bullets */
ul, #myUL {
  list-style-type: none;
}

/* Remove margins and padding from the parent ul */
#myUL {
  margin: 0;
  padding: 0;
}

/* Style the caret/arrow */
.caret {
  cursor: pointer;
  user-select: none; /* Prevent text selection */
}

/* Create the caret/arrow with a unicode, and style it */
.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
.caret-down::before {
  transform: rotate(90deg);
}

/* Hide the nested list */
.nested {
  display: none;
}

/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
.active {
  display: block;
}
</style>
<ul id="myUL" style="background-color: white">
  <li><span class="caret">Learning Material</span>
    <ul class="nested">
  <li><span class="caret">Playgroup</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="P.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="P.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="P.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="P.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="P.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="P.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="P.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="P.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="P.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="P.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="P.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="P.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Nersury</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="N.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="N.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="N.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="N.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="N.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="N.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="N.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="N.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="N.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="N.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="N.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="N.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Prep</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li  value="Pr.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Pr.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Pr.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Pr.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Pr.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Pr.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Pr.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Pr.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Pr.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Pr.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Pr.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Pr.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">One</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="O.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="O.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="O.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="O.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="O.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="O.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="O.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="O.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="O.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="O.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="O.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="O.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Two</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="T.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="T.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="T.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="T.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="T.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="T.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="T.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="T.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="T.C.B">Books</li>
          </a>
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="T.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="T.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="T.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Three</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Th.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Th.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Th.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Th.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Th.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Th.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Th.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Th.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Th.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
         <a href="{{route('view.notes')}}"><li value="Th.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Th.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Th.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Four</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="F.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="F.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="F.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="F.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="F.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="F.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="F.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="F.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="F.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="F.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="F.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="F.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Five</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Fi.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Fi.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Fi.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Fi.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Fi.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Fi.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Fi.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Fi.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Fi.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Fi.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Fi.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Fi.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Six</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="S.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="S.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="S.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="S.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="S.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="S.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="S.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="S.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="S.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="S.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="S.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="S.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Seven</span>
    <ul class="nested">
     <li><span class="caret">Section A</span>
        <ul class="nested">
      <a href="{{route('view.notes')}}"><li value="Se.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Se.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Se.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Se.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Se.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Se.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Se.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Se.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Se.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Se.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Se.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Se.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Eight</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="E.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="E.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="E.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="E.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="E.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="E.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="E.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="E.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="E.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="E.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="E.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="E.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Nine</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Ni.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Ni.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Ni.A.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Ni.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Ni.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Ni.B.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
         <a href="{{route('view.notes')}}"><li value="Ni.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Ni.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Ni.C.B">Books</li></a>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Ni.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Ni.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Ni.D.B">Books</li></a>
          
        </ul>
      </li>
    </ul>
  </li>
    <li><span class="caret">Ten</span>
    <ul class="nested">
     
      <li><span class="caret">Section A</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Te.A.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Te.A.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Te.A.B">Books</li>
          
        </ul>
      </li>
      <li><span class="caret">Section B</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Te.B.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Te.B.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Te.B.B">Books</li>
          
        </ul>
      </li>
      <li><span class="caret">Section C</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Te.C.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Te.C.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Te.C.B">Books</li>
          
        </ul>
      </li>
      <li><span class="caret">Section D</span>
        <ul class="nested">
          <a href="{{route('view.notes')}}"><li value="Te.D.W">Written Notes</li></a>
          <a href="{{route('view.videos')}}"><li value="Te.D.V">Video Lectures</li></a>
          <a href="{{route('view.books')}}"><li value="Te.D.B">Books</li>
          
        </ul>
      </li>
    </ul>
  </li>
  </ul>
  </li>
</ul>


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
  <script type="text/javascript">
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
  </script>
</body>

</html>