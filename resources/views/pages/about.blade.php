@extends('layouts.main')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
      <li class="active">Tentang Kami</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- about -->
<div class="about">
  <div class="container">
    <h3 class="w3_agile_header">Tentang Kami</h3>
    <div class="about-agileinfo w3layouts">
      <div class="col-md-8 about-wthree-grids grid-top">
        <h4>Supermarket.id Belanja Murah, Mudah, dan Banyak Diskonnya</h4>
        <p class="top">Supermarket.id adalah perbenlanjaan online yang mudah, murah, dan terpercaya. Dengan ini anda dapat memesan kebutuhan harian atau bulanan anda dimanapun dan kapanpun.</p>
        <p>Nikmati penawaran harian dari kami dengan berbagai macam produk serta potongan harga sampai 80%. Barang di dapur dan bahan makanan anda habis tapi tidak punya waktu untuk berbelanja di supermarket? Berbelanjalah si Supermarket.id. Berbelanja sambil bekerja? Bisa ataupun anda sangat sibuk. Hanya tinggal tap tap dan tap, bayar, dan tadaaa pesanan anda akan dikirim.  </p>		
        <div class="about-w3agilerow">
          <div class="col-md-4 about-w3imgs">
            <img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
          </div>
          <div class="col-md-4 about-w3imgs">
            <img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
          </div>
          <div class="col-md-4 about-w3imgs">
            <img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-4 about-wthree-grids">
        <div class="offic-time">
          <div class="time-top">
            <h4>Praesentium :</h4>
          </div>
          <div class="time-bottom">
            <h5>At vero eos </h5>
            <h5>Accusamus et</h5>
            <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui accusamus et. </p>
          </div>
        </div>
        <div class="testi">
          <h3 class="w3_agile_header">Testimoni</h3>
          <!--//End-slider-script -->
          <script src="js/responsiveslides.min.js"></script>
           <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 5
              $("#slider5").responsiveSlides({
              auto: true,
              pager: false,
              nav: true,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });
            </script>
          <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider5">
              <li>
                <div class="testi-slider">
                  <h4>"Saya sangat terbantu dengan adanya Supermarket.id ini.</h4>
                  <p></p>
                  <div class="testi-subscript">
                    <p><a href="#">Bishram</a></p>
                    <span class="w3-agilesub"> </span>
                  </div>	
                </div>
              </li>
              <li>
                <div class="testi-slider">
                  <h4>"Terima Kasih Supermarket.id</h4>
                  <p></p>
                  <div class="testi-subscript">
                    <p><a href="#">Alfarabi</a></p>
                    <span class="w3-agilesub"> </span>
                  </div>	
                </div>
              </li>
              <li>
                <div class="testi-slider">
                  <h4>"Begitu mudah dalam berbelanja kebutuhan bulanan</h4>
                  <p></p>
                  <div class="testi-subscript">
                    <p><a href="#">Asjar</a></p>
                    <span class="w3-agilesub"> </span>
                  </div>	
                </div>
              </li>
            </ul>	
          </div>
        </div>
      </div>	
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //about -->
<!-- about-slid -->
<div class="about-slid agileits-w3layouts"> 
  <div class="container">
    <div class="about-slid-info"> 
      <h2>Lorem Ipsum is that it has a moreless normal</h2>
      <p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks on the Internet tend as necessary, making this the first true generator on the Internet embarrassing hidden in the middle of text Lorem Ipsum generators on the Internet tend to repeat predefinedchunks as necessary, making this the first true generator on the.</p>
    </div>
  </div>
</div>
<!-- //about-slid -->
<!-- about-team -->
<div class="about-team"> 
  <div class="container">
    <h3 class="w3_agile_header">Team Kami</h3>
    <div class="team-agileitsinfo">
      <div class="col-md-3 about-team-grids">
        <img src="images/t4.jpg" alt=""/>
        <div class="team-w3lstext">
          <h4><span>Muh. Bishram</span></h4>
          <p></p>
        </div>
        <div class="social-icons caption"> 
          <ul>
            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
          </ul>
          <div class="clearfix"> </div>  
        </div>
      </div>
      <div class=" col-md-3 about-team-grids">
        <img src="images/t2.jpg" alt=""/>
        <div class="team-w3lstext">
          <h4><span>Achmad Asjar</span></h4>
          <p></p>
        </div>
        <div class="social-icons caption"> 
          <ul>
            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
          </ul>
          <div class="clearfix"> </div>  
        </div>
      </div>
      <div class="col-md-3 about-team-grids">
        <img src="images/t1.jpg" alt=""/>
        <div class="team-w3lstext">
          <h4><span>Muh. Alfarabi</span></h4>				
          <p></p>
        </div>
        <div class="social-icons caption"> 
          <ul>
            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
          </ul>
          <div class="clearfix"> </div>  
        </div>
      </div>
      <div class="col-md-3 about-team-grids">
        <img src="images/t3.jpg" alt=""/>
        <div class="team-w3lstext">
          <h4><span>Muh. Akib</span></h4>
          <p></p>
        </div>
        <div class="social-icons caption"> 
          <ul>
            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
          </ul>
          <div class="clearfix"> </div>  
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //about-team -->

@endsection
