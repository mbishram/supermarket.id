@extends('layouts.main')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
      <li class="active">Register</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->

<!-- register -->
<div class="register">
  <div class="container">
    <h2>Register Disini!</h2>
    <div class="login-form-grids">
      @error('terms')
        <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
      @enderror
      @if(session('success'))
        <div class="alert-success alert mb-3"><small><strong>{{ session('success') }}</strong></small></div>
      @endif
      <h5>Informasi Profil</h5>
      <form action="registerC" method="POST">
        <input id="name" name="name" type="text" placeholder="Nama Lengkap">
        @error('name')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <input id="address" name="address" type="text" placeholder="Alamat Rumah">
        @error('address')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <input id="telephone_number" name="telephone_number" type="text" placeholder="Nomor Telepon">
        @error('telephone_number')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <h6>Informasi Login</h6>
        
        <input id="email" name="email" type="email" placeholder="Alamat Email">
        @error('email')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <input id="password" name="password" type="password" placeholder="Password">
        @error('password')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfirmasi Password">
        @error('password_confirmation')
          <small><strong class="text-danger ">{{ $message }}</strong></small>
        @enderror
        
        <div class="register-check-box">
          <div class="check">
            <label class="checkbox"><input id="terms" name="terms" type="checkbox" name="checkbox"><i> </i>Saya menerima "<span class="style-italic">Term and Condition</span>"</label>
          </div>
        </div>

        <input type="submit" value="Register">
        
        @csrf
      </form>
    </div>
    <h4>Sudah punya akun?</h4>
    <p><a href="login">Login</a>atau Kembali ke<a href="/">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
  </div>
</div>
<!-- //register -->
@endsection