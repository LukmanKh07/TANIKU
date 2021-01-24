@extends('web.baseimage')
@section('nama_toko')
<h1 class="mb-0 bread">{{ $markets->nama_market }}</h1>
@endsection
@section('isi_konten')

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><h3><a href="" > MY ALL PRODUCTS</a></h3></li>
    					
    				</ul>
                   <ul class="product-category">
                        <li><h5><a href="{{ route('market.create') }}" class="active"><span><i class="ion-ios-add"></i> Tambah Product</a></h5></li> 
                          <li><h5><a href="{{ route('order.order_produk') }}" class="active"><span> Orders</a></h5></li> 
                        <li><h5><a href="{{ route('order.penjualan') }}" class="active"><span></i> Penjualaan</a></h5></li>                        
                    </ul>
                    
    			</div>
    		</div>
            <div class="row">
    		@foreach ($products as $produk)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{ $produk->gambar }}" alt="ga ada image">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ $produk->nama_produk }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>{{ $produk->harga_produk }}</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
                    <form action="{{ route('market.destroy',$produk->id_produk) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('market.show',$produk->id_produk) }}"><span><i class="ion-ios-menu"></i></span></a>
        
                        <a class="btn btn-primary" href="{{ route('market.edit',$produk->id_produk) }}"><span><i class="ion-ios-alert"></i></span></a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
	    							
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
            @endforeach

    			
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection