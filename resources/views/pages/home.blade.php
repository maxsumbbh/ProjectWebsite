@extends('layouts.master')

@section('content')

<div>
<img id="logo-main" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="200" alt="Logo Thing main logo">
</div>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav navbar-expand-lg" role="banner">
        <div class="container">
          <div class="navbar-header">
            <a href="./" class="navbar-brand">เทคโนโลยีสารสนเทศ</a>
          </div>
          <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right navbar-nav ml-auto ">
              <li class="active">
                <a class="nav-link" href="/">หน้าแรก</a>
              </li>
              <li>
                    <a class="nav-link" href="member">บุคลากร</a>
                  </li>
                  <li>
                    <a class="nav-link" href="course">หลักสูตร</a>
                  </li>
              <li class="dropdown">
                <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">หน่วยงานอื่น <b class="caret"></b></a>
                <ul class="dropdown-content ">
                  <li><a class="nav-link" href="https://bua.rmutr.ac.th/" target="blank">คณะบริหารธุรกิจ</a></li>
                  <li><a class="nav-link" href="#">Vision</a></li>
                  <li><a class="nav-link" href="#">Careers</a></li>
                </ul>
              </li>
              <li>
                <a class="nav-link" href="tact">ติดต่อเรา</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

<div class="content">
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>News Update</h2>
        <div class="fakeimg" style="height:100%;"></div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('assets/img/10.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                  
                  </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                  <div class="carousel-caption d-none d-md-block">
                
                  </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                  <div class="carousel-caption d-none d-md-block">
          
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        <p>Some text..</p>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
              <div>
                  <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/51.jpg'); ?>" width="100%" height="100%" alt=""></a>  
                  <p class="card-text">เทคโนโลยีสารสนเทศ</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div>
                  <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/52.jpg'); ?>" width="100%" height="100%" alt=""></a>   
                  <p class="card-text">เทคโนโลยีสารสนเทศ</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div>
                  <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/53.jpg'); ?>" width="100%" height="100%" alt=""></a>              
                  <p class="card-text">เทคโนโลยีสารสนเทศ</p>
              </div>
            </div>
      </div>
      
     
        
    
    
    <!-- /.row -->
  
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <div class="fakeimg" style="height:100px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
      <div class="card">
        <h2>Popular Post</h2>
        <div class="fakeimg">
            <img src="<?php echo asset('assets/img/2.png'); ?>" width="100%" height="100%" alt=""/>
          
        </div><br>
        
        <div class="fakeimg">Image</div><br>
        <div class="fakeimg">Image</div>
      </div>
     
    </div>
  </div>
  <br>
  <br>

  <button class="tablink" onclick="openPage('Home', this, '#ffffff')"id="defaultOpen"><img src="<?php echo asset('assets/img/11.png'); ?>" width="50px" height="50px" alt="" class="media-object" /><br>
    สหกิจ</button>
<button class="tablink" onclick="openPage('News', this, '#ffffff')" ><img src="<?php echo asset('assets/img/12.gif'); ?>" width="50px" height="50px" alt="" class="media-object" /><br>
  กิจกรรม</button>

<button class="tablink" onclick="openPage('Contact', this, '#ffffff')"><img src="<?php echo asset('assets/img/13.png'); ?>" width="50px" height="50px" alt="" class="media-object" /><br>
  ผลงาน</button>
<br>
<br>


<div id="Home" class="tabcontent">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
            <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/1.jpg'); ?>" width="100%" height="100%" alt=""></a>  
            
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
              <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/2.jpg'); ?>" width="100%" height="100%" alt=""></a>   
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
              <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/3.jpg'); ?>" width="100%" height="100%" alt=""></a>            
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
  </div>
</div>

<div id="News" class="tabcontent">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
              <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/20.jpg'); ?>" width="100%" height="100%" alt=""></a>  
              <p class="card-text">เฟรชชี่เดย์ ปี2562</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
              <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/21.jpg'); ?>" width="100%" height="100%" alt=""></a>  
              <p class="card-text">กีฬาสี ปี2562</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
              <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/23.jpg'); ?>" width="100%" height="100%" alt=""></a>          
              <p class="card-text">พิธีไหว้ครู ปี2562</p>
          </div>
        </div>
  </div>
</div>

<div id="Contact" class="tabcontent">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x600" alt=""></a>  
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x600" alt=""></a>    
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div>
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x600" alt=""></a>               
              <p class="card-text">เทคโนโลยีสารสนเทศ</p>
          </div>
        </div>
  </div>
</div>



<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>

<footer>
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-md-6">
          <h3>Site Map</h3>
          <ul class="list-unstyled three-column">
            <li>Home</li>
            <li>Services</li>
            <li>About</li>
            <li>Code</li>
            <li>Design</li>
            <li>Host</li>
            <li>Contact</li>
            <li>Company</li>
          </ul>
          <ul class="list-unstyled socila-list">
            <li><img src="http://placehold.it/48x48" alt="" /></li>
            <li><img src="http://placehold.it/48x48" alt="" /></li>
            <li><img src="http://placehold.it/48x48" alt="" /></li>
            <li><img src="http://placehold.it/48x48" alt="" /></li>
            <li><img src="http://placehold.it/48x48" alt="" /></li>
            <li><img src="http://placehold.it/48x48" alt="" /></li>
          </ul>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <h3>latest Articles</h3>
          <div class="media">
            <a href="#" class="pull-left">
              <img src="http://placehold.it/64x64" alt="" class="media-object" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Programming</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          
          <div class="media">
            <a href="#" class="pull-left">
              <img src="http://placehold.it/64x64" alt="" class="media-object" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Coding</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          
          <div class="media">
            <a href="#" class="pull-left">
              <img src="http://placehold.it/64x64" alt="" class="media-object" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Web Sesign</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          
        </div>
        
        <div class="col-lg-4">
          <h3>Our Work</h3>
          <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
          <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
          <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
          <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        </div>
        
      </div>
    </div>
    <div class="copyright text-center">
      Copyright &copy; 2017 <span>Your Template Name</span>
    </div>
  </footer>

@endsection