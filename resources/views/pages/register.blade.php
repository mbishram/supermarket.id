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
      <h5>Informasi Profil</h5>
      <form action="#" method="post">
        <input type="text" placeholder="Nama Lengkap" required=" " >
        <input type="text" placeholder="Alamat Rumah" required=" " >
        <input type="text" placeholder="Nomor Telepon" required=" " >
      </form>
      <h6>Informasi Login</h6>
        <form action="#" method="post">
        <input type="email" placeholder="Alamat Email" required=" " >
        <input type="password" placeholder="Password" required=" " >
        <input type="password" placeholder="Konfirmasi Password" required=" " >
        <div class="register-check-box">
          <div class="check">
            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Saya ingin mengetahui promo dan berita dari supermarket.id</label>
          </div>
        </div>
        <div class="register-check-box">
          <div class="check">
            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Saya menerima "<span class="style-italic">Term and Condition</span>"</label>
          </div>
        </div>
        <input type="submit" value="Register">
      </form>
    </div>
    <h4>Sudah punya akun?</h4>
    <p><a href="login">Login</a>atau Kembali ke<a href="/">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
  </div>
</div>
<!-- //register -->
@endsection