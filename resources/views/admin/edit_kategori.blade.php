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
                                 
                                
                                             <form action="{{ route('kategori.update',$kategori->id) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                @method('PUT')
                                                
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                                  <input type="text" name="kategori" class="form-control" value="{{ $kategori->kategori }}">
                                                
                                                <div class="mb-3 form-check">
                                                  
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                              </form>
                                            
                                        
                                </div>
                            </div>

                        </div>
            </div>
            <!-- #/ container -->
        </div>



@endsection