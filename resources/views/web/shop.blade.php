@extends('web.base')
@section('konten')

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Vegetables</a></li>
    					<li><a href="#">Fruits</a></li>
    					<li><a href="#">Juice</a></li>
    					<li><a href="#">Dried</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                @foreach ($products as $produk)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{ $produk->gambar }}" alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ $produk->nama_produk }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">{{ $produk->harga_produk }}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('market.show',$produk->id_produk) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <!-- <a  class="buy-now d-flex justify-content-center align-items-center mx-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a> -->
                                   
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <!-- <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a> -->
                                        <input type="hidden" name="id" value="{{ $produk->id_produk }}">
                                        <button type="submit" class="btn">
                                        <a class="buy-now d-flex justify-content-center align-items-center mx-1"><span><i class="ion-ios-cart"></i></span></a>
                                    </button>
                
                                    </form>
                                    

                                    <!-- <div class="collapse" id="collapseExample">
                                      
                                       
                                            <span class="input-group-btn mr-2">
                                                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                               <i class="ion-ios-remove"></i>
                                                </button>
                                                </span>
                                            <input type="text" id="quantity" name="jumlah" value="1" min="1" max="100">
                                            <span class="input-group-btn ml-2">
                                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                 <i class="ion-ios-add"></i>
                                             </button>
                                            </span>
                                        
                                      
                                    </div> -->
                                </div>
                            </div>
    					</div>
    				</div>
    			</div>
                @endforeach
    			<!-- @foreach ($products as $produk)
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
            @endforeach -->
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