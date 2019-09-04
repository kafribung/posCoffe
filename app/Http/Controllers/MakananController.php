<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Makanan::latest()->get();
        return view('posAdmin.makanan')->withDatas($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        $makanan = new Makanan;
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->jenis = $request->jenis;

        if ($request->hasFile('gambar')) 
        {
          $image = $request->file('gambar');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          \Image::make($image)->resize(800, 600)->save($location);
          $makanan->gambar=$filename;

        } 
         $makanan->save();
        
        return redirect('/makanan')->with('sukses', 'Makanan Berhasil Ditambahkan!');
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
        $data = Makanan::findOrFail($id);
        return view('posEditDelete.editMakanan')->withDatas($data);
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
        /* dd($request->all()); */

        $data = Makanan::find($id);
        $data->update($request->all());

        if ($request->hasFile('gambar')) 
        {
          /* $image = $request->file('gambar');
          // $filename = time() . '.' . $image->getClientOriginalExtension();
          // $location = public_path('images/' . $filename);
          // \Image::make($image)->resize(800, 600)->save($location);
           $request->merge(['gambar' => $filename]); */

          /* $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalExtension());
           $data->gambar = $request->file('gambar')->getClientOriginalExtension();
           $data->save(); */

          $image = $request->file('gambar');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          \Image::make($image)->resize(800, 600)->save($location);
          $data->gambar=$filename;
          $data->save();
        
        } 

        
        return redirect('/makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Makanan::findOrFail($id);
        $data->delete();
        return redirect('/makanan');
    }
}
