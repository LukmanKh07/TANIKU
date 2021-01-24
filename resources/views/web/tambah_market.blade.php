@extends('web.image_market')
@section('isi_konten')

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><h3><a href="" > CREATE MARKETS</a></h3></li>
    					
    				</ul>
                   
                    
    			</div>
    		</div>
            <div class="row">
    	
              <form action="{{ route('toko.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                  <input type="text" name="market" class="form-control">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kontak</label>
                  <input type="text" name="kontak" class="form-control">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control">
                  
                </div>
                

                
                <div class="mb-3 form-check">
                  
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
    			
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