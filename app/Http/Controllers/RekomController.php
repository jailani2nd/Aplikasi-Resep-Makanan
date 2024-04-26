<?php

namespace App\Http\Controllers;

use App\Models\Rekom;
use Illuminate\Http\Request;

class RekomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekoms = Rekom::all();
        return view('rekomendasi.index', compact('rekoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekomendasi.create');
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
            'jenispenyakitindo'=>'required',
            'jenispenyakiteng' =>'required',
            'biologis'=> 'required',
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


           Rekom::create($input);

           return redirect('admin/rekoms')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekom  $rekom
     * @return \Illuminate\Http\Response
     */
    public function show(Rekom $rekom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekom  $rekom
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekom $rekom)
    {
        return view('rekomendasi.edit', compact('rekom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekom  $rekom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekom $rekom)
    {
        $request->validate([
            'jenispenyakitindo'=>'required',
            'jenispenyakiteng' =>'required',
            'biologis'=> 'required',
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


           $rekom->update($input);

           return redirect('admin/rekoms')->with('message', 'data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekom  $rekom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekom $rekom)
    {
        $rekom->delete();

        return redirect('admin/rekoms')->with('message', 'data berhasil di Hapus');
    }
}
