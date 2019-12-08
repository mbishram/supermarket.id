@extends('layouts.main')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
      <li class="active">Promos</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->
<!--- products --->
<div class="products">
  <div class="container">
      
    <div class="products-right">
      {{-- <div class="products-right-grid">
        <div class="products-right-grids">
          <div class="sorting">
            <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutkan Standar</option>
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutkan Berdasarkan Terpopuler</option> 
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutkan Berdasarkan Bintang</option>					
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutkan Berdasarkan Harga</option>								
            </select>
          </div>
          <div class="sorting-left">
            <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item pada halaman 9</option>
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item pada halaman 18</option> 
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item pada halaman 32</option>					
              <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Semua</option>								
            </select>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div> --}}
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/pf4.png"></a>		
                      <p>Sampann-toor-dal</p>
                      <h4>Rp.36000 <span>Rp.55000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                          <input type="hidden" name="amount" value="36000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/bv3.png"></a>		
                      <p>Parryss-sugar</p>
                      <h4>Rp.30000 <span>Rp.45000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="basmati rise">
                          <input type="hidden" name="amount" value="30000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
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
                      <a href="item"><img src="images/16.png" alt=" " class="img-responsive"></a>
                      <p>Saffola-gold</p>
                      <h4>Rp.80000 <span>Rp.100000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Pepsi soft drink">
                          <input type="hidden" name="amount" value="80000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive">
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="item"><img title=" " alt=" " src="images/pf4.png"></a>		
                        <p>Sampann-toor-dal</p>
                        <h4>Rp.36000 <span>Rp.55000</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                            <input type="hidden" name="amount" value="36000">
                            <input type="hidden" name="discount_amount" value="1000">
                            <input type="hidden" name="currency_code" value="IDR">
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
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/hh4.png"></a>		
                      <p>Sampann-toor-dal</p>
                      <h4>Rp.35000 <span>Rp.55000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                          <input type="hidden" name="amount" value="35000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/gu5.png"></a>		
                      <p>Parryss-sugar</p>
                      <h4>Rp.30000 <span>Rp.45000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="basmati rise">
                          <input type="hidden" name="amount" value="30000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
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
                      <a href="item"><img src="images/pc6.png" alt=" " class="img-responsive"></a>
                      <p>Saffola-gold</p>
                      <h4>Rp.80000 <span>Rp.100000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Pepsi soft drink">
                          <input type="hidden" name="amount" value="80000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive">
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="item"><img title=" " alt=" " src="images/gu4.png"></a>		
                        <p>Sampann-toor-dal</p>
                        <h4>Rp.35000 <span>Rp.55000</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                            <input type="hidden" name="amount" value="35000">
                            <input type="hidden" name="discount_amount" value="1000">
                            <input type="hidden" name="currency_code" value="IDR">
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
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/gu4.png"></a>		
                      <p>Sampann-toor-dal</p>
                      <h4>Rp.35000 <span>Rp.55000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                          <input type="hidden" name="amount" value="35000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="images/offer.png" alt=" " class="img-responsive">
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="item"><img title=" " alt=" " src="images/5.png"></a>		
                      <p>Parryss-sugar</p>
                      <h4>Rp.30000 <span>Rp.45000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="basmati rise">
                          <input type="hidden" name="amount" value="30000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
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
                      <a href="item"><img src="images/6.png" alt=" " class="img-responsive"></a>
                      <p>Saffola-gold</p>
                      <h4>Rp.80000 <span>Rp.100000</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="business" value=" ">
                          <input type="hidden" name="item_name" value="Pepsi soft drink">
                          <input type="hidden" name="amount" value="80000">
                          <input type="hidden" name="discount_amount" value="1000">
                          <input type="hidden" name="currency_code" value="IDR">
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
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive">
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="item"><img title=" " alt=" " src="images/gu4.png"></a>		
                        <p>Sampann-toor-dal</p>
                        <h4>Rp.35000 <span>Rp.55000</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                            <input type="hidden" name="amount" value="35000">
                            <input type="hidden" name="discount_amount" value="1000">
                            <input type="hidden" name="currency_code" value="IDR">
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
      <nav class="numbering">
        <ul class="pagination paging">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    
    <div class="clearfix"> </div>
  </div>
</div>
<!--- products --->
@endsection