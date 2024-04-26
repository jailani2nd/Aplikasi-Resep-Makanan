<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reseps = Resep::all();
        return view('resep.index', compact('reseps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create');
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
            'slug'=>'required',
            'judulindo'=>'required',
            'juduleng'=>'required',
            'categori'=>'required',
            'deskripsipendekindo'=>'required',
            'deskripsipendekeng'=>'required',
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


           Resep::create($input);

           return redirect('admin/reseps')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show(Resep $resep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit(Resep $resep)
    {
        return view('resep.edit', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resep $resep)
    {
        $request->validate([
            'slug'=>'required',
            'judulindo'=>'required',
            'juduleng'=>'required',
            'categori'=>'required',
            'deskripsipendekindo'=>'required',
            'deskripsipendekeng'=>'required',
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


           $resep->update($input);

           return redirect('admin/reseps')->with('message', 'data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        $resep->delete();

        return redirect('admin/reseps')->with('message', 'data berhasil di Hapus');
    }
}
