@extends('web.baseimage')
@section('nama_toko')
<h1 class="mb-0 bread">{{ $markets->nama_market }}</h1>
@endsection
@section('isi_konten')

<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="../{{ $products->gambar }}" class="image-popup"><img src="../{{ $products->gambar }}" class="img-fluid" alt="{{ $products->gambar }}"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $products->nama_produk }}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							
						</div>
    				<p class="price"><span>{{ $products->harga_produk }}</span></p>
    				<p>{{ $products->deskripsi }}
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		             
		            </div>
							</div>
							<div class="w-100"></div>
							
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">{{ $products->stok }} kg available</p>
	          	</div>
          	</div>
          	<p><a href="{{ route('market.index') }}" class="btn btn-black py-3 px-5">Kembali</a></p>
    			</div>
    		</div>
    	</div>
    </section>

@endsection