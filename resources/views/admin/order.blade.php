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
                                                <th>Produk</th>                                        
                                                <th>Jumlah</th>                                           
                                                <th>Harga</th>
                                                <th>Alamat</th>
                                                <th>Tanggal</th>
                                                <th>status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                                @foreach ($order as $order)
                                    <tr>
                                            <td>{{ $order->nama }}</td>
                                            <td>{{ $order->jumlah }}</td>
                                            <td>{{ $order->harga }}</td>
                                            <td>{{ $order->tujuan }}</td>
                                            <td>{{ $order->created_at}}</td>
                                            <td><h5 style="color: blue">{{ $order->status}}</h5></td>
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