<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DetailOrder;
use DB;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $order = DB::table('detailorders')
        ->join('orders','orders.id_order', '=', 'detailorders.id_order')
        ->join('products','products.id_produk', '=', 'detailorders.id_produk')
        ->where('orders.id_user',Auth::id())
        ->select('detailorders.*', 'products.nama_produk as nama', 'products.gambar as gambar',
            'products.id_produk as id_produk','products.harga_produk as har','orders.status as status')
        ->get();
        // dd($order);
        return view('web.my_order',[
            'order' => $order]);

    }

    public function order_produk()
    {
        //
         $order = DB::table('detailorders')
        ->join('orders','orders.id_order', '=', 'detailorders.id_order')
        ->join('products','products.id_produk', '=', 'detailorders.id_produk')
        ->join('users','orders.id_user', '=', 'users.id')
        ->where('products.id_user',Auth::id())

        ->select('detailorders.*', 'products.nama_produk as nama', 'products.gambar as gambar',
            'products.id_produk as id_produk','products.harga_produk as har','orders.status as status','orders.tujuan as tujuan',
            'users.name as nama_pemesan')
        ->get();
        // dd($order);
        return view('web.order_produk',[
            'order' => $order]);

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
        if (is_null(Auth::id())) {
            # code...
            return redirect()->route('login');
        }else{
            $session_id = session()->getId();
            $order = new Order();
            $order->id_user = Auth::id();
            $order->total = request('tal');
            $order->tujuan = request('alamat');
            $order->save();

            $kera = DB::table('carts')
            ->where('id_session',$session_id)
            ->get();

            // $isi = ['kerajang' => $kera];
            // dd(count($kera));
            $idpesan = DB::table('orders')
            ->latest()
            ->value('id_order');

            
            
            foreach ($kera as $key => $value ) {
                # code...
                $detail = new DetailOrder();
                $detail->id_order = $idpesan;
                $detail->id_produk = $value->id_produk;
                $detail->jumlah = $value->jumlah;
                $detail->harga = $value->harga;
                $detail->save();


                // dd($value->harga);
                // foreach ($value as $key2 =>$value2) {
                //     # code...
                //     dd($value2->harga);
                // }
            }

            // if ($order->save()) {
            //     # code...


            // }

            
            DB::table('carts')->where('id_session',$session_id)->delete();
            // return view(web.cart);
        
            return redirect()->route('cart.index');
        }
        

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
         DB::table('orders')
              ->where('id_order', $id)
              ->update(['status' => 'selesai',              
          ]);
        return redirect()->route('order.order_produk');
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
