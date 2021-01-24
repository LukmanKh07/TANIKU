@extends('admin.base')
    <!-- END nav -->
    @section('isi')

     <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Produk</h4>
                                    
                                </div>
                                 
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Penjual</th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Stock</th>
                                                <th>Created At</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($produk as $produk)
                                            <tr>
                                                <th>{{ ++$i }}</th>
                                                <td>{{ $produk->nama }}</td>
                                                <td>{{ $produk->nama_produk }}</td>
                                                <td>{{ $produk->harga_produk }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>{{ $produk->created_at->format('d F Y') }}</td>
                                               
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