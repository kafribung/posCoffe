<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Makanan;
use App\Minum;
use App\Pesan;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = Makanan::latest()->get();
        $minuman = Minum::latest()->get();
        return view('posUser.pesanan')->withMakanans($makanan)->withMinumans($minuman);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pesanan = new Pesan;
        $pesanan->nama = $request->nama;
        $pesanan->tempat = $request->tempat;
        $pesanan->total = $request->bacot;
        $pesanan->save();
        $pesanan->makanan()->sync($request->beli, false);
        $pesanan->Minuman()->sync($request->beli1, false);
        
        return redirect('/checkout');  
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