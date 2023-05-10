<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuanganRequest;
use App\Http\Requests\UpdateRuanganRequest;
use App\Models\Ruangan;
use App\Models\Gambar;
// use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role != 0){
            // return view('admin.list-ruangan');
            $ruangan = Ruangan::all();

            // dd($ruangan->load(['fasilitases']));
            
            return view('admin.list-ruangan', [ 
            'ruangan' => $ruangan,
        ]);

        }//elseif (Auth::user()->role == 0) {
            //$ruangan = Ruangan::all();
            //return redirect('ruangan');;
        //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.create', [
            'request' => $request
        ]);
    }

    public function store(Request $request)
    {
        dd($request->denah);         
            // }
        $validatedData = $request->validate([
            'nama_ruangan' => 'required',
            'kepala_lab' => 'required',
            'gedung' => 'required',
            'lantai' => 'required',
            'fasilitas' => 'required',
            // 'gambar_ruangan' => 'required',
            // 'jadwal' => 'required',
            'denah' => 'required'
        ]);

        // dd($validatedData);
        // $validatedData['gambar_ruangan'] = $request->file('gambar_ruangan')->store('img-ruangan');
        $validatedData['denah'] = $request->file('denah')->store('img-denah');
        // $validatedData['jadwal'] = $request->file('jadwal')->store('img-jadwal');
        Ruangan::create($validatedData);

        return redirect('/admin/list-ruangan');

        // $product = new Ruangan;
        // $product->nama_ruangan = 'God of War';
        // $product->kepala_lab = 'kratos';
        // $product->gedung = 'olympus';
        // $product->lantai = 'final';

        // $product->save();

        // $category = Fasilitas::find([1, 2]);
        // $product->fasilitases()->attach($category);

        // return 'Success';

    }

    public function edit($id, Request $request)
    {
        $ruangan = Ruangan::where([
            ['gedung', '=', $request->gedung],
            ['lantai', '=', $request->lantai]])->get();

        return view('admin.edit', [
            'ruangan' => Ruangan::find($id),
            'request' => $request
        ]);

    }

    public function update($id, Request $request)
    {
        $ruangan = Ruangan::find($id);
        
        $ruangan->update($request->except(['_token','gambar_ruangan','denah','jadwal']));
        if($request->file('gambar_ruangan') ){
            $ruangan->gambar_ruangan = $request->file('gambar_ruangan')->store('img-ruangan');
        }
        if($request->file('denah')){
            $ruangan->denah = $request->file('denah')->store('img-denah');
        }
        // if($request->file('jadwal')){
        //     $ruangan->jadwal = $request->file('jadwal')->store('img-jadwal');
        // }
        $ruangan->save();
        return redirect('/admin/list-ruangan');
    }

    public function destroy($id, Ruangan $ruangan)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return redirect('/admin/list-ruangan');
    }
    public function detail($id) {
        return view('user.detail', [
            'ruangan' => Ruangan::find($id)
        ]);
    }

    public function awalan() {
        
        if(Auth::user()->role == 0){
            return view('user.ruangan');
        }
        
        return view('user.ruangan', [
            'ruangan' => Ruangan::all()
        ]);
    }
    public function gambar($id, Request $request)
    {
        $gambar     = Gambar::where('ruangan_id', $id)->get();
        $idRuangan = $id;
        // dd($idRuangan);
        
        return view('admin.gambar', [
            'ruangan'   => $idRuangan,
            'gambar'    => $gambar
        ]);
    }
    public function gambar_add(Request $request)
    {
        $validatedData = $request->validate([
            'ruangan_id' => 'required',
            'gambar' => 'required'
        ]);
        
        // dd($request->ruangan_id);

        $validatedData['gambar'] = $request->file('gambar')->store('img-ruangan');
        // dd($validatedData);

        Gambar::create($validatedData);

        return redirect('/admin/list-ruangan');
    }

    public function hapusGambar($id, Gambar $gambar)
    {
        $gambar = Gambar::find($id);
        $gambar->delete();
        return redirect('/admin/list-ruangan');
    }
    
    
}
