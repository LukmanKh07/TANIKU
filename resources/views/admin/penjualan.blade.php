@extends('admin.base')
    <!-- END nav -->
    @section('isi')

     <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Penjualan</h4>
                                    <ul class="product-category">
                        <li><h5><a href="" class="btn btn-info"><span><i class="ion-ios-add"></i> Cetak Penjualan</a></h5></li>                        
                    </ul>
                                </div>
                                 
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Produk</th>                                        
                                                <th>Jumlah</th>                                           
                                                <th>Harga</th>
                                                <th>Alamat</th>
                                                <th>Tanggal</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                                @foreach ($jual as $jual)
                                    <tr>
                                            <td>{{ $jual->nama }}</td>
                                            <td>{{ $jual->jumlah }}</td>
                                            <td>{{ $jual->harga }}</td>
                                            <td>{{ $jual->alamat }}</td>
                                            <td>{{ $jual->created_at}}</td>
                                        </tr>
                                    @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
            </div>
            <!-- #/ container -->
        </div>



@endsection