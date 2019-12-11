@extends('layouts.main')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Checkout</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h2>Keranjangmu Berisi: <span>{{ (count($datas['items']) == 0) ? 'Tidak Ada Item' : (count($datas['items']) . ' Item') }}</span></h2>

			@if (count($datas['items']) == 0)
				<a href="/" class="button-checkout-none"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Kembali Belanja</a>
			@else
				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>	
								<th>Produk</th>
								<th>Nama Produk</th>
								<th>Harga</th>
							</tr>
						</thead>
						@foreach ($datas['items'] as $item)
						<tr>
							<td class="invert">{{ $item['number'] }}</td>
							<td class="invert-image"><a href="#"><img src="/storage/photos/{{ $item['photo'] }}" alt=" " class="image-checkout" /></a></td>

							<td class="invert">{{ $item['name'] }}</td>
							
							<td class="invert">Rp.{{ $item['price'] }}</td>
						</tr>
						@endforeach
						
					</table>
				</div>
				<div class="checkout-left">	
					<div class="checkout-left-basket">
						<h4>Ringkasan Harga</h4>
						<ul>
						@foreach ($datas['items'] as $item)
							<li>{{ $item['name'] }} <i>-</i> <span>Rp.{{ $item['price'] }} </span></li>
						@endforeach
							<li>Biaya Layanan <i>-</i> <span>Rp.10000</span></li>
							<li>Total <i>-</i> <span>Rp.{{ $item['total'] + 10000 }}</span></li>
						</ul>
					</div>
					<div class="checkout-right-basket"> 
						<form action="/checkout" method="POST">
							<button type="submit" class="button-checkout">Lanjutkan Pembayaran <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>

							@csrf
						</form>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>	
			@endif
		</div>
	</div>
<!-- //checkout -->
@endsection