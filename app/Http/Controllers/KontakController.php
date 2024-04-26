<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = Kontak::all();
        return view('kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');
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
            'nama'=>'required',
            'nomortelepon' =>'required',
            'alamat'=> 'required',
            'maps'=>'required',
            'jambuka'=>'required',
            'email'=>'required',
            'image'=>'required|image',
           ]);

           $input = $request->all();

           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
           }


           Kontak::create($input);

           return redirect('admin/kontaks')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'nama'=>'required',
            'nomortelepon' =>'required',
            'alamat'=> 'required',
            'maps'=>'required',
            'jambuka'=>'required',
            'email'=>'required',
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


           $kontak->update($input);

           return redirect('admin/kontaks')->with('message', 'data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect('admin/kontaks')->with('message', 'data berhasil di Hapus');
    }
}
