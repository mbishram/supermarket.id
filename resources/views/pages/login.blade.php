@extends('layouts.main')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
      <li class="active">Login</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- login -->
<div class="login">
  <div class="container">
    <h2>Login ke Akunmu</h2>

  
    <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
      <form action="login" method="POST">
        
        @if(session('login_failed'))
          <div class="alert-danger alert mb-3"><small><strong>{{ session('login_failed') }}</strong></small></div>
        @endif

        <input id="email" name="email" type="email" placeholder="Alamat Email" required value="{{ old('email') }}">

        <input id="password" name="password" type="password" placeholder="Password" required>

        {{-- <div class="forgot">
          <a href="#">Lupa Password?</a>
        </div> --}}
        
        <input type="submit" value="Login">

        @csrf
      </form>
    </div>
    <h4>Baru di supermarket.id?</h4>
    <p><a href="register">Register</a>atau Kembali ke<a href="/">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
  </div>
</div>
<!-- //login -->
@endsection