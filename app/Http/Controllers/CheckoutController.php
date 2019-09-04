<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use App\Laporan;
use App\Makanan;
use App\Minum;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Pesan::where('nama', 'LIKE', '%'.$request->cari.'%')->paginate(50);
        } else {
            $data = Pesan::latest()->where('bayar', 0)->paginate(7);
        }
        return view('posUser.checkOut')->withDatas($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $data = Pesan::findOrFail($id);
        return view('posPrintCheckOut.printCheckOut')->withDatas($data);
    }

    

    public function editutama($id)
    {
        $edit = Pesan::findOrFail($id);
        $makanan = Makanan::latest()->get();
        $minuman = Minum::latest()->get();
        return view('posEditDelete.editCheckout')->withDatas($edit)->withMakanans($makanan)->withMinumans($minuman);
    }


    public function updateutama(Request $request, $id) {
             $data = Pesan::findOrFail($id);
             $data->update($request->all());
             $data->save();   
             return redirect('/checkout');
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
        $data = Pesan::findOrFail($id);
        $data->bayar=1;
        $data->save();
        $laporan= new Laporan;
        $laporan->kasBesar = $data->total;
        $laporan->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pesan::findOrFail($id);
        $data->delete($data);
        return redirect('/checkout');
    }
}
