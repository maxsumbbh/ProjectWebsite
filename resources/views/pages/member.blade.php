@extends('layouts.master')

@section('content')
 

<div class="header">
  {{-- //code ใส่รูป --}}
  <img src="<?php echo asset('assets/img/2.png'); ?>" width="100%" height="200px">
  {{-- //code ใส่รูป   --}}
</div>

<div class="navbar">
  <a href="/" >หน้าแรก</a>
  <a href="" class="active">บุคลากร</a>
  <a href="course">หลักสูตร</a>
  <a href="https://bua.rmutr.ac.th/" target="_blank">หน่วยงานอื่น</a>
  <a href="tact" >ติดต่อเรา</a>
</div>
<div class="content">
  
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

@endsection