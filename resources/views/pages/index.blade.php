@extends('layouts.main')

@section('content')
@if(session('success'))
  <div class="alert-success alert mb-0"><small><strong>{{ session('success') }}</strong></small></div>
@endif
<!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <a href="foods"> <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
     
      </div>
      <div class="item">
       <a href="necessities"> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
       
      </div>
      <div class="item">
        <a href="foods"><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
        
      </div>
    </div>
  
  </div>
<!-- /.carousel -->	
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
  <div class="container" style="text-align: center">
    <h2>Promo Hari Ini!</h2>

    <div class="agile_top_brands_grids mb-4">

      {{-- One Item --}}
      @foreach ($datas['items'] as $item)

      <div class="col-md-4 top_brand_left mb-4">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
              {{-- Offers --}}
              @if ( $item->is_promo == 1 )
                <img src="images/offer.png" alt=" " class="img-responsive" />
              @endif
            </div>
            <div class="agile_top_brand_left_grid1">
              <figure>

                {{-- Information --}}
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb">
                    <a href="#"><img title="" alt="" src="/storage/photos/{{ $item->photo }}" class="image" /></a>		
                    <p>{{ $item->name }}</p>
                    @if ( $item->is_promo == 1 )
                      <h4>Rp.{{ round( $item->price * (70/100)) }} <span>Rp.{{ $item->price }}</span></h4>
                    @else
                      <h4>Rp.{{ $item->price }}</h4>
                    @endif
                  </div>

                  {{-- Button --}}
                  <div class="snipcart-details top_brand_home_details">
                    <form action="add" method="post">
                      <fieldset>
                        <input type="hidden" name="item_id" value="{{ $item->id }}" />
                        <input type="hidden" name="item_price" value="{{ ($item->is_promo == 1) ? $item->price * (70/100) : $item->price }}" />
                        <input type="submit" name="submit" value="Add to cart" class="button" />
                      </fieldset>

                      @csrf
                    </form>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
          
      @endforeach
      <div class="clearfix"> </div>
    </div>

    <a href="promos" class="btn btn-primary weight-bold">Lihat Promo Lainnya!</a>
  </div>
</div>
<!-- //top-brands -->
<!--banner-bottom-->
      <div class="ban-bottom-w3l">
        <div class="container">
        <div class="col-md-6 ban-bottom3">
            <div class="ban-top">
              <img src="images/p2.jpg" class="img-responsive" alt=""/>
              
            </div>
            <div class="ban-img">
              <div class=" ban-bottom1">
                <div class="ban-top">
                  <img src="images/p3.jpg" class="img-responsive" alt=""/>
                  
                </div>
              </div>
              <div class="ban-bottom2">
                <div class="ban-top">
                  <img src="images/p4.jpg" class="img-responsive" alt=""/>
                  
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-6 ban-bottom">
            <div class="ban-top">
              <img src="images/111.jpg" class="img-responsive" alt=""/>
              
              
            </div>
          </div>
          
          <div class="clearfix"></div>
        </div>
      </div>
<!--banner-bottom-->
{{-- <!-- new -->
<div class="newproducts-w3agile">
  <div class="container">
    <h3>Produk Baru</h3>
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="products"><img title=" " alt=" " src="images/14.png"></a>		
                      <p>Fried-gram</p>
                      <div class="stars">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                      </div>
                        <h4>$35.99 <span>$55.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                          <input type="hidden" name="amount" value="35.99">
                          <input type="hidden" name="discount_amount" value="1.00">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="return" value=" ">
                          <input type="hidden" name="cancel_return" value=" ">
                          <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="products"><img title=" " alt=" " src="images/15.png"></a>		
                      <p>Navaratan-dal</p>
                      <div class="stars">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                      </div>
                        <h4>$30.99 <span>$45.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="basmati rise">
                            <input type="hidden" name="amount" value="30.99">
                            <input type="hidden" name="discount_amount" value="1.00">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="return" value=" ">
                            <input type="hidden" name="cancel_return" value=" ">
                            <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="products"><img src="images/16.png" alt=" " class="img-responsive"></a>
                      <p>White-peasmatar</p>
                      <div class="stars">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                      </div>
                        <h4>$80.99 <span>$105.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Pepsi soft drink">
                          <input type="hidden" name="amount" value="80.00">
                          <input type="hidden" name="discount_amount" value="1.00">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="return" value=" ">
                          <input type="hidden" name="cancel_return" value=" ">
                          <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="products"><img title=" " alt=" " src="images/17.png"></a>		
                      <p>Channa-dal</p>
                      <div class="stars">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                      </div>
                        <h4>$35.99 <span>$55.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                          <input type="hidden" name="amount" value="35.99">
                          <input type="hidden" name="discount_amount" value="1.00">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="return" value=" ">
                          <input type="hidden" name="cancel_return" value=" ">
                          <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
          <div class="clearfix"> </div>
      </div>
  </div>
</div>
<!-- //new --> --}}
<!--brands-->
<div class="brands">
  <div class="container">
  <h3>Brand Store</h3>
    <div class="brands-agile">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="brands-agile-1">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="brands-agile-2">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>	
<!--//brands-->

@endsection
