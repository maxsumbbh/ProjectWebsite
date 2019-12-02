@extends('layouts.master')

@section('content')


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">เทคโนโลยีสารสนเทศ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/" class="active">หน้าแรก
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="member">บุคลากร</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course">หลักสูตร</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://bua.rmutr.ac.th/" target="_blank">หน่วยงานอื่น</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tact">ติดต่อเรา</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/img/2.png')">
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
</header>

<div class="content">
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>News Update</h2>
        <div class="fakeimg" style="height:100%;"></div>
        <header>
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
          </header>
       
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

<div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h2>Heading</h2>
          <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3">Links</h4>
            <ul class="m-0 p-0">
              <li>- <a href="#">Lorem ipsum</a></li>
              <li>- <a href="#">Nam mauris velit</a></li>
              <li>- <a href="#">Etiam vitae mauris</a></li>
              <li>- <a href="#">Fusce scelerisque</a></li>
              <li>- <a href="#">Sed faucibus</a></li>
              <li>- <a href="#">Mauris efficitur nulla</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Location</h4>
          <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
          <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
    </div>

@endsection