<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testis = Testi::all();
        return view('testimonial.index', compact('testis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
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
            'posisi'=>'required',
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


           Testi::create($input);

           return redirect('admin/testis')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit(Testi $testi)
    {
        return view('testimonial.edit', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testi $testi)
    {
        $request->validate([
            'nama'=>'required',
            'posisi'=>'required',
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


           $testi->update($input);

           return redirect('admin/testis')->with('message', 'data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testi $testi)
    {
        $testi->delete();

        return redirect('admin/testis')->with('message', 'data berhasil di Hapus');
    }
}
