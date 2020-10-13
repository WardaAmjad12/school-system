@include('theme.admin.navbar')
<br><br>
 <section class="hero-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero-text">
                                    <h2>{{$teacher->name}}</h2>
                                </div>
                                <div class="hero-info">
                                    <h2>General Info</h2>
                                    <ul>
                                        <li><span>Date of Birth</span>{{$teacher->dob}}</li>
                                        <li><span>E-mail</span>{{$teacher->email}}</li>
                                        <li><span>Phone </span>{{$teacher->Phone}}</li>
                                        <li><span>Section </span>{{$teacher->section}}</li>
                                        <li><span>Subject </span>{{$teacher->subject}}</li>
                                        <li><span>Gender </span>{{$teacher->gender}}</li>
                                        <li><span>ID NO </span>{{$teacher->id_no}}</li>
                                        <li><span>First Name </span>{{$teacher->Fname}}</li>
                                        <li><span>Last Name </span>{{$teacher->Lname}}</li>
                                        <li><span>City </span>{{$teacher->city}}</li>
                                        <li><span>Address</span>{{$teacher->address}}</li>
                                        <li><span>PostalCode</span>{{$teacher->Pcode}}</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 text-md-center">
                                <figure class="hero-image">
                                    <img src="{{asset('images/'.$teacher->image)}}" alt="5">
                                </figure>
                            </div>

 <style type="text/css">
              html,
body {
  height: 100%;
  font-family: 'Josefin Sans', sans-serif;
}
              
h2,
h3,
h4,
h5,
h6 {
  color: #40424a;
  margin: 0;
  font-weight: 600;
  font-family: 'Josefin Sans', sans-serif;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 30px;
}

p {
  font-size: 18px;
  color: #808181;
  line-height: 1.8;
}

img {
  max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
  outline: none;
}

a:hover,
a:focus {
  text-decoration: none;
  outline: none;
}

ul,
ol {
  padding: 0;
  margin: 0;
}
.hero-section {
  background: #f2f7f8;
}

.hero-text {
  margin-bottom: 80px;
}

.hero-text h2 {
  font-size: 90px;
  line-height: normal;
  margin-bottom: 20px;
}

.hero-text p {
  font-size: 33px;
  line-height: 1.3;
}

.hero-image {
  padding-top: 170px;
}

.hero-info h2 {
  margin-bottom: 30px;
}

.hero-info ul {
  list-style: none;
}

.hero-info ul li {
  font-size: 24px;
  color: #808181;
  margin-bottom: 15px;
}

.hero-info ul li span {
  color: #40424a;
  display: inline-block;
  min-width: 220px;
}

.hero-info ul li:last-child {
  margin-bottom: 0;
}
            </style>
        </section>
@include('theme.js')
</body>

</html>