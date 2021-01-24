<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jual =  DB::table('detailorders')->sum('jumlah');
        $produk =  DB::table('products')->count('id_produk');
        $pengguna =  DB::table('users')
        ->where('is_admin',0)
        ->count('id');

        // dd(compact('kategori'));
        return view('admin.admin',[
            'jual'=>$jual,
            'pengguna'=>$pengguna,
            'produk'=>$produk,
        ]);
    }

    public function produk()
    {
        //
        $produk =  product::latest()
        ->JOIN('users','users.id', '=', 'products.id_user')
        ->select('products.*', 'users.name as nama')
        ->paginate(10);

        // dd(compact('kategori'));
        return view('admin.produk',compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function order()
    {
        //
        $order = DB::table('detailorders')
        ->join('orders','orders.id_order', '=', 'detailorders.id_order')
        ->join('products','products.id_produk', '=', 'detailorders.id_produk')
        ->select('detailorders.*', 'products.nama_produk as nama', 'products.gambar as gambar',
            'products.id_produk as id_produk','products.harga_produk as har','orders.status as status',
            'orders.tujuan as tujuan')
        ->get();
        // dd($order);
        return view('admin.order',[
            'order' => $order]);
    }

    public function penjualan()
    {
        //
         
        $jual = DB::table('detailorders')
        ->join('orders','orders.id_order', '=', 'detailorders.id_order')
        ->join('products','products.id_produk', '=', 'detailorders.id_produk')
        ->where('orders.status','selesai')
        ->select('detailorders.*', 'products.nama_produk as nama', 'products.gambar as gambar',
            'products.id_produk as id_produk','orders.total as tot','orders.status as tus','orders.id_order as id_order',
            'orders.tujuan as alamat')
        ->get();

        return view('admin.penjualan',[
            'jual' => $jual]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user->update("status",'Non Aktif');
        return redirect()->route('admin.pengguna');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
