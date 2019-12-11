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
@if(session('success'))
  <div class="alert-success alert mb-0"><small><strong>{{ session('success') }}</strong></small></div>
@endif
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
        {{-- One Item --}}
        @foreach ($datas['items'] as $item)

        <div class="col-md-3 top_brand_left mb-4">
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
                      <a href="products"><img title="" alt="" src="/storage/photos/{{ $item->photo }}" class="image-sm" /></a>		
                      <p>{{ $item->name }}</p>
                      @if ( $item->is_promo == 1 )
                        <h4>Rp.{{ round($item->price * (70/100)) }} <span>Rp.{{ $item->price }}</span></h4>
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
      <nav class="numbering">
        <nav class="numbering">
          {{ $datas['items']->links() }}
        </nav>
      </nav>
    </div>
    
    <div class="clearfix"> </div>
  </div>
</div>
<!--- products --->
@endsection