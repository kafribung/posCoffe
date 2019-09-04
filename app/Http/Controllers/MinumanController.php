<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minum;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Minum::latest()->get();
        return view('posAdmin.minuman')->withDatas($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $minuman = new Minum;
        $minuman->nama = $request->namaMinuman;
        $minuman->harga = $request->hargaMinuman;
        $minuman->jenis = $request->jenisMinuman;

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            \Image::make($image)->resize(800, 600)->save($location); 
            $minuman->gambar = $filename;
            
        }
        $minuman->save();
        return redirect('/minuman')->with('sukses', 'Minuman Berhasil Ditambahkan!');
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
        $data = Minum::findOrFail($id);
        return view('posEditDelete.editMinuman')->withDatas($data);
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
        $data = Minum::findOrFail($id);
        $data->update($request->all());

        if ($request->hasFile('gambar')) 
        {

          $image = $request->file('gambar');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          \Image::make($image)->resize(800, 600)->save($location);
          $data->gambar=$filename;
          $data->save();
         }
        
        return redirect('/minuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Minum::findOrFail($id);
        $data->delete();
        return redirect('/minuman');
    }
}
