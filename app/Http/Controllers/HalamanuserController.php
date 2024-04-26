<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\About;
use App\Models\Categori;
use App\Models\Resep;
use App\Models\Rekom;
use App\Models\Testi;
use App\Models\Kontak;

class HalamanuserController extends Controller
{
    public function index(){
        $about = About::first();
        $slides = Slide::first();
        $categoris = Categori::all();
        $reseps = Resep::where('categori', 'diabetes')->get();
        $rekoms = Rekom::all();
        $testis = Testi::all();
        $kontaks = Kontak::first();
        return view('user/index', compact('slides', 'about', 'categoris', 'reseps', 'rekoms', 'testis', 'kontaks'));
    }

    public function about(){
        $kontaks = Kontak::first();
        $about = About::first();
        return view('user/about', compact('about', 'kontaks'));
    }

    public function resep(){
        $kontaks = Kontak::first();
        $about = About::first();
        $rekoms = Rekom::all();
        $reseps = Resep::all();
        return view('user/resep', compact('about', 'kontaks', 'rekoms','reseps'));
    }

    public function diabetes(){
        $kontaks = Kontak::first();
        $about = About::first();
        $rekoms = Rekom::all();
        $reseps = Resep::where('categori', 'diabetes')->get();
        return view('user/diabetes', compact('about', 'kontaks', 'rekoms','reseps'));
    }

    public function hipertensi(){
        $kontaks = Kontak::first();
        $about = About::first();
        $rekoms = Rekom::all();
        $reseps = Resep::where('categori', 'hipertensi')->get();
        return view('user/hipertensi', compact('about', 'kontaks', 'rekoms','reseps'));
    }

    public function jantung(){
        $kontaks = Kontak::first();
        $about = About::first();
        $rekoms = Rekom::all();
        $reseps = Resep::where('categori', 'jantung')->get();
        return view('user/jantung', compact('about', 'kontaks', 'rekoms','reseps'));
    }

    public function obesitas(){
        $kontaks = Kontak::first();
        $about = About::first();
        $rekoms = Rekom::all();
        $reseps = Resep::where('categori', 'obesitas')->get();
        return view('user/obesitas', compact('about', 'kontaks', 'rekoms','reseps'));
    }

    public function contact(){
        $kontaks = Kontak::first();
        $about = About::first();
        return view('user/contact', compact('about', 'kontaks'));
    }

    public function detailResep($slug)
    {
        $reseps = Resep::where('slug', $slug)->first();
        $kontaks = Kontak::first();
        $about = About::first();
        return view('user/details', ['reseps'=>$reseps, 'about'=>$about, 'kontaks'=>$kontaks]);
    }

    public function detailRekomendasi($jenispenyakitindo)
    {
        $rekoms = Rekom::where('jenispenyakitindo', $jenispenyakitindo)->first();
        $kontaks = Kontak::first();
        $about = About::first();
        return view('user/reseprekom', ['rekoms'=>$rekoms, 'about'=>$about, 'kontaks'=>$kontaks]);
    }

    public function detailCategori($nomor)
    {
        $categoris = Categori::where('nomor', $nomor)->first();
        $kontaks = Kontak::first();
        $about = About::first();
        return view('user/detailcategori', ['categoris'=>$categoris, 'about'=>$about, 'kontaks'=>$kontaks]);
    }

}
