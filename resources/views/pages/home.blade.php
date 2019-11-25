@extends('layouts.master')

@section('content')
 

<div class="header">
  {{-- //code ใส่รูป --}}
  <img src="<?php echo asset('assets/img/2.png'); ?>" width="100%" height="200px">
  {{-- //code ใส่รูป   --}}
</div>

<div class="navbar">
  <a href="#" class="active">หน้าแรก</a>
  <a href="member">บุคลากร</a>
  <a href="#">หลักสูตร</a>
  <a href="https://bua.rmutr.ac.th/" target="_blank">หน่วยงานอื่น</a>
  <a href="tact" >ติดต่อเรา</a>
</div>
<div class="content">
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
      <div class="card">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <div class="fakeimg" style="height:100px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
      <div class="card">
        <h3>Popular Post</h3>
        <div class="fakeimg">Image</div><br>
        <div class="fakeimg">Image</div><br>
        <div class="fakeimg">Image</div>
      </div>
      <div class="card">
        <h3>Follow Me</h3>
        <p>Some text..</p>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

@endsection