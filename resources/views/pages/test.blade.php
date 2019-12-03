@extends('layouts.master')

@section('content')
<img id="logo-main" src="<?php echo asset('assets/img/2.png'); ?>" width="90%"  alt="Logo Thing main logo">
      
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav navbar-expand-lg" role="banner">
        <div class="container">
          <div class="navbar-header">
            <a href="./" class="navbar-brand">เทคโนโลยีสารสนเทศ</a>
          </div>
          <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right navbar-nav ml-auto ">
              <li>
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
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="https://bua.rmutr.ac.th/" target="blank">คณะบริหารธุรกิจ</a></li>
                  <li><a class="nav-link" href="#">Vision</a></li>
                  <li><a class="nav-link" href="#">Careers</a></li>
                </ul>
              </li>
              <li class="active">
                <a class="nav-link" href="tact">ติดต่อเรา</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="row">
            <div class="col-lg-2 mb-0">
              <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/60.png'); ?>" width="141px" height="213px" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project One</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Two</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Three</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Four</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Five</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        
      
  
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