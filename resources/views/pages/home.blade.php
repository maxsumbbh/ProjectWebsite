@extends('layouts.master')

@section('content')
 
{{-- //code ใส่รูป --}}
        <img src="<?php echo asset('assets/img/1.jpg'); ?>" width="100%">
{{-- //code ใส่รูป   --}}
<div class="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
  </div>
  
  <br>
  
  <div class="footer">
    <p>Footer</p>
  </div>

@endsection