<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoris = Categori::all();
        return view('kategori.index', compact('categoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor'=>'required',
            'judulindo'=>'required',
            'juduleng'=>'required',
            'deskripsiindo'=>'required',
            'deskripsieng'=>'required',
            'image'=>'required|image',
           ]);

           $input = $request->all();

           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
           }


           Categori::create($input);

           return redirect('admin/categoris')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function show(Categori $categori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function edit(Categori $categori)
    {
        return view('kategori.edit', compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categori $categori)
    {
        $request->validate([
            'nomor'=>'required',
            'judulindo'=>'required',
            'juduleng'=>'required',
            'deskripsiindo'=>'required',
            'deskripsieng'=>'required',
            'image'=>'image',
           ]);

           $input = $request->all();

           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
           }else{
            unset($input[
                'image'
            ]);
           }


           $categori->update($input);

           return redirect('admin/categoris')->with('message', 'data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categori $categori)
    {
        $categori->delete();

        return redirect('admin/categoris')->with('message', 'data berhasil di Hapus');
    }
}
