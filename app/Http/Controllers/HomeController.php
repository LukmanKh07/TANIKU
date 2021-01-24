<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Product;
use DB;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $produk = DB::table('products')
        ->where('id_user','!=',Auth::id())
        ->limit(12)
        ->latest()
        ->get();

        return view('web.home',[
            'products' => $produk]);
    }

    public function adminHome()
    {   
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
    
}
