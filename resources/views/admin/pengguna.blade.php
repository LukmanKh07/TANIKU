@extends('admin.base')
    <!-- END nav -->
    @section('isi')
 <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Pengguna</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($users as $user)
                                            <tr>
                                                <th>{{ ++$i }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at->format('d F Y') }}</td>
                                                <td>
                                                    <form action="{{ route('admin.edit',$user->id) }}" method="POST">                                                   
                                                                 
                                                        <a class="btn btn-info" href="">{{ $user->status }}</a>                                          
                                                                                                                                
                                                        @csrf                                                        
                                          
                                                       
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