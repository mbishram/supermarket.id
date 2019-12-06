<!-- header -->
<div class="agileits_header">
  <div class="container">
    <div class="w3l_offers">
      <p>GUNAKAN KODE "VROM2" AGAR DAPAT ONGKIR GRATIS. <a href="products">BELI SEKARANG!</a></p>
    </div>
    <div class="agile-login">
      @if (Auth::check())
      <ul>
        <li><p class="user">Welcome <b>{{Auth::user()->name}}</b></p></li>
        <li><form action="logoutC" method="POST">@csrf<input type="submit" value="Logout" class="btn btn-danger"></form></li>
      </ul>
      @else
      <ul>
        <li><a href="register"> Register </a></li>
        <li><a href="login">Login</a></li>
      </ul>
      @endif
      
    </div>
    <div class="product_list_header">
      <a href="checkout"><button class="w3view-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a> 
    </div>
    <div class="clearfix"> </div>
  </div>
</div>

<div class="logo_products">
  <div class="container">
  <div class="w3ls_logo_products_left1">
      <ul class="phone_email">
        <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi kami : (0411) 3884 271</li>
        
      </ul>
    </div>
    <div class="w3ls_logo_products_left">
      <h1><a href="/">supermarket.id</a></h1>
    </div>
  <div class="w3l_search">
    <form action="#" method="post">
      <input type="search" name="Search" placeholder="Cari Produk.." required="">
      <button type="submit" class="btn btn-default search" aria-label="Left Align">
        <i class="fa fa-search" aria-hidden="true"> </i>
      </button>
      <div class="clearfix"></div>
    </form>
  </div>
    
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
  <div class="container">
    <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Beranda</a></li>	
                <li><a href="/products">Promo</a></li>	
                <!-- Mega Menu -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Makanan & Minuman <b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>Semua</h6>
                          <li><a href="products">Dals & Pulses</a></li>
                          <li><a href="products">Almond</a></li>
                          <li><a href="products">Cashews</a></li>
                          <li><a href="products">Buah Kering</a></li>
                          <li><a href="products"> Mukhwas </a></li>
                          <li><a href="products">Produk Beras</a></li>
                        </ul>
                      </div>	
                      
                    </div>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kebutuhan Harian <b class="caret"></b></a>
                  <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                      <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                          <h6>Semua</h6>
                          <li><a href="products">Alat Masak</a></li>
                          <li><a href="products">Dust Pans</a></li>
                          <li><a href="products">Scrubbers</a></li>
                          <li><a href="products">Dust Cloth</a></li>
                          <li><a href="products"> Mops </a></li>
                          <li><a href="products">Alat Dapur</a></li>
                        </ul>
                      </div>
                    </div>
                  </ul>
                </li>
                <li><a href="contact">Kontak</a></li>
              </ul>
            </div>
            </nav>
    </div>
  </div>
  
<!-- //navigation -->