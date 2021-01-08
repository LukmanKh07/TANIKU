  @extends('web.base')
    <!-- END nav -->
  @section('konten')

 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        
						        <th>Quantity</th>
						        <th>Total</th>
                    <th>Status</th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($order as $order)
						    
						      <tr class="text-center">
						        <td class="product-remove">
						        	<form action="{{ route('order.destroy',$order->id_produk) }}" method="POST">

						        	
						        	@csrf
                        			@method('DELETE')
                        			<button type="submit" class="btn "><span class="ion-ios-close"></span></button>
						        	</form>
						        </td>
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{ $order->nama }}</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						       
						        
						        <td class="quantity">
						        	{{ $order->jumlah }}
					          
					          </td>
						        
						        <td class="total">

						        	<input type="hidden" name="harga" value="{{ $order->harga }}">{{ $order->harga }}
						        </td>
                    <td><h5>{{ $order->status }}</h5></td>
						        </form>
						      </tr><!-- END TR-->
						      @endforeach
						    </tbody>
						  </table>
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
