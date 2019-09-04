<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;
use App\Pengeluaran;
use App\Pesan;
use App\Laporan;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        $totalKas = 0;
        $kasBank= 0;
        
        /*Kas Sekarang*/  
        $datas = Pesan::where('created_at', 'LIKE', '%'.date('Y-m-d').'%')->get();
        foreach ($datas as $data) {
            $total += $data->total;
        }
        $laporan= Laporan::get()->sum('kasBesar');
        return view('posAdmin.kas')->withTot($total)->withKas($laporan);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $kas = new Kas;
        $kas->kasKecil = $request->kasKecil;
        $kas->save();

        $laporan= new Laporan;
        $laporan->kasBesar = $request->kasKecil;
        $laporan->save();

        return redirect('/kas')->with('sukses', 'Kas Kecil Berhasil Ditambahkan!');
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
