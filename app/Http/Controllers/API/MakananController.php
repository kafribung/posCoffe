<?php

namespace App\Http\Controllers\API;
use App\Makanan;
use App\Minum;
use App\Stok;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $stok = Stok::latest()->first();
        $data = Minum::findOrFail($id);
        $set = $data->harga;
        $pembilang = $request['jumlah'];
        if($data->jenis == 'kopi'){
            $stok->stok_kopi -= (($pembilang / $set) *15);
            $stok->save();
            return ['pesan'=>"sukses"];
        }
        return ['pesan'=>"bukan kopi"];
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
        // $data = Makanan::findOrFail($id);
        // $set = $data->harga;
        // $pembilang = $request['jumlah'];

        // $data->stok -= ($pembilang / $set);
        // $data->save();
        // return ['pesan'=>"sukses"];
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
