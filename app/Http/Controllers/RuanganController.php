<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuanganRequest;
use App\Http\Requests\UpdateRuanganRequest;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Gambar;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    if ($request->submit) {
        $ruangan = Ruangan::where([
            ['gedung', '=', $request->gedung],
            ['lantai', '=', $request->lantai]])->get();
        } else {
            $ruangan = Ruangan::all();
        }
        
        return view('user.ruangan', [
            'ruangan' => $ruangan,
            'request' => $request,
        ]);
    }
    public function detail($id) {
        // $did = Ruangan::find($id);
        // dd(explode(",", $did->fasilitas));
        $gambar     = Gambar::where('ruangan_id', $id)->get();
        return view('user.detail', [
            'ruangan' => Ruangan::find($id),
            'gambar' => $gambar
        ]);
    } 
    public function carosel() {

        return view('user.carousel');
    } 
}
