<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Market;
use App\User;
use App\Product;
use DB;
use Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $market = Market::select("markets.*", "users.*")

        //          ->join("user_addresses", "user_addresses.id_user", "=", "users.id")

        //          ->where("users.id", 1)

        //          ->get();
        // $market = DB::table('markets')
        // ->join('users','users.id', '=', 'markets.id_user')
        // ->where('markets.id_user' , Auth::id())
        // ->first();

        $jumlah = DB::table('markets')->where('id_user', Auth::id())->count('id_market');
        if ($jumlah == 0) {
            # code...
            return view('web.tambah_market');
        }
        $market = DB::table('markets')->where('id_user', Auth::id())->first();
        $produk = DB::table('products')
        ->join('markets','markets.id_market', '=', 'products.id_market')
        ->where('products.id_user',Auth::id())
        ->get(); 

        return view('web.market', [
            'markets' => $market,
            'products' => $produk]);
    }

    public function produk()
    {
        //
        

        $produk = DB::table('products')
        ->join('markets','markets.id_market', '=', 'products.id_market')
        ->where('products.id_user','!=',Auth::id())
        ->get();

        return view('web.shop', [
            'products' => $produk]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori =  DB::table('categories')->get();
        return view('web.tambah',['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $market = DB::table('markets')->where('id_user', Auth::id())->value('id_market');
        $request->validate([
            'produk' => 'required',            
            'harga' => 'required',
            'kategori' =>'required',
            'deskripsi' =>'required',
            'stock' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',            
            
        ]);

        $imageName = time().'.'.$request->gambar->extension();

        


        $product = new Product();
            $product->nama_produk = request('produk');
            $product->harga_produk = request('harga');
            $product->stok = request('stock');
            $product->gambar = $request->gambar->move('public/images', $imageName);
            $product->id_user = Auth::id();
            $product->id_market = $market;
            $product->save();
  
   
       // return view('web.market');


        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
  
        // Product::create($request->all());
   
        return redirect()->route('market.index');
        //                 ->with('success','Product created successfully.');

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
        $market = DB::table('markets')->where('id_user', Auth::id())->first();
        $produk = DB::table('products')->where('id_produk',$id)->first();
        
         // dd($produk);
         return view('web.detail_produk', [
            'markets' => $market,
            'products' => $produk]);
        // return view('web.detail_produk',compact('product'));
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
        $kategori =  DB::table('categories')->get();
        $produk = DB::table('products')->where('id_produk',$id)->first();
        
         // dd($produk);
         return view('web.edit_produk', [
            'products' => $produk],['kategori' => $kategori]);

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
        $market = DB::table('markets')->where('id_user', Auth::id())->value('id_market');
        $request->validate([
            'produk' => 'required',            
            'harga' => 'required',
            'kategori' =>'required',
            'deskripsi' =>'required',
            'stock' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',            
            
        ]);

        $imageName = time().'.'.$request->gambar->extension();

        

            DB::table('products')
              ->where('id_produk', $id)
              ->update(['nama_produk' => request('produk'),
                'harga_produk' => request('harga'),
                'deskripsi' => request('deskripsi'),
                'kategori' => request('kategori'),
                'stok' => request('stock'),
                'gambar' => $request->gambar->move('public/images', $imageName)
          ]);
           return redirect()->route('market.index');
  
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
        DB::table('products')->where('id_produk',$id)->delete();
  
        return redirect()->route('market.index');
    }
}
