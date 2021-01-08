<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keranjang;
use DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $session_id = session()->getId();
        $keranjang = DB::table('carts')
        ->join('products','products.id_produk', '=', 'carts.id_produk')
        ->where('id_session', $session_id)
        ->select('carts.*', 'products.nama_produk as nama', 'products.gambar as gambar',
            'products.id_produk as id_produk','products.harga_produk as har')
        ->get();

        // $keranjang = DB::table('carts')
        // ->join('products','carts.id_produk', '=', 'products.id_produk')
        // ->join('markets','markets.id_market', '=', 'products.id_market')
        // ->select('carts.*', 'products.nama_produk as nama', 'products.gambar as gambar',
        //     'products.id_produk as id_produk','products.harga_produk as har')
        // ->groupBy('products.id_market')
        // ->get();

        // $users = DB::table('users')
        //         ->groupBy('id')
        //         ->having('id', '>', 100)
        //         ->get();
        // dd($keranjang);

        $jum = DB::table('carts')
        ->where('id_session', $session_id)->sum('harga');
         // dd($jumlah);
        return view('web.cart', [
            'carts' => $keranjang,
             'lah' => $jum,
        ]);
        
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
        // $market = DB::table('markets')->where('id_user', Auth::id())->value('id_market');
        // $request->validate([
        //     'produk' => 'required',            
        //     'harga' => 'required',
        //     'stock' => 'required',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',            
            
        // ]);

        // $imageName = time().'.'.$request->gambar->extension();

        


        // $product = new Product();
        //     $product->nama_produk = request('produk');
        //     $product->harga_produk = request('harga');
        //     $product->stok = request('stock');
        //     $product->gambar = $request->gambar->move('public/images', $imageName);
        //     $product->id_user = Auth::id();
        //     $product->id_market = $market;
        //     $product->save();

        // return redirect()->route('market.index');

        $harga = DB::table('products')->where('id_produk', request('id'))->value('harga_produk');

        $session_id = session()->getId();

        $keranjang = new Keranjang();
        $keranjang->id_session = $session_id;
        $keranjang->id_produk = request('id');
        $keranjang->harga = $harga;
        $keranjang->jumlah = 1;
        $keranjang->save();
        return redirect()->route('cart.index');
        

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
        $request->validate([
            'jumlah' => 'required',            
            'harga' => 'required',
            
        ]);
            $price = DB::table('products')->where('id_produk', $id)->value('harga_produk');
            $total = $price * request('jumlah');
            DB::table('carts')
              ->where('id_produk', $id)
              ->update(['jumlah' => request('jumlah'),
                'harga' => $total,                
          ]);

              
           return redirect()->route('cart.index');
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
        DB::table('carts')->where('id_produk',$id)->delete();
  
        return redirect()->route('cart.index');
    }
}
