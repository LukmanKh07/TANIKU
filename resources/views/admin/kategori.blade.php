@extends('admin.base')
    <!-- END nav -->
    @section('isi')

     <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Kategori</h4>
                                </div>
                                 <ul class="product-category">
                        <li><h5><a href="{{ route('kategori.create') }}" class="btn btn-info"><span><i class="ion-ios-add"></i> Tambah Kategori</a></h5></li>                        
                    </ul>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kategori</th>
                                                <th>Created At</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($kategori as $kategori)
                                            <tr>
                                                <th>{{ ++$i }}</th>
                                                <td>{{ $kategori->kategori }}</td>
                                                <td>{{ $kategori->created_at->format('d F Y') }}</td>
                                                <td>
                                                    <form action="{{ route('kategori.destroy',$kategori->id) }}" method="PUT">                                                   
                                                                 
                                                        <a class="btn btn-info" href="{{ route('kategori.edit',$kategori->id) }}">Edit</a>
                                                      
                                                                                                                                
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Delete</button>                                                     
                                          
                                                       
                                                    </form>
                                                </td>
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