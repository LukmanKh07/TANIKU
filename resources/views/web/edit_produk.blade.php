@extends('web.baseimage')
@section('isi_konten')

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><h3><a href="" > ADD PRODUCTS</a></h3></li>
    					
    				</ul>                   
                    
    			</div>
    		</div>
            <div class="row">
    		
    			    <form action="{{ route('market.update',$products->id_produk) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Produk</label>
                  <input type="text" name="produk" class="form-control" value="{{ $products->nama_produk }}">
                  
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Gambar</label>
                  <input type="file" name="gambar" class="form-control" >
                  <input type="hidden" name="gambar" class="form-control" value="{{ $products->gambar }}">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Harga</label>
                  <input type="text" name="harga" class="form-control" value="{{ $products->harga_produk }}">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Stock</label>
                  <input type="text" name="stock" class="form-control" value="{{ $products->stok }}">
                </div>
                <div class="mb-3 form-check">
                  
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            

    			
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