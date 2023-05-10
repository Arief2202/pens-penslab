<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jadwal;
use App\Models\ListUser;

class JadwalController extends Controller
{

    public function read()
    {
        if(Auth::user()->role == 1){
            $jadwal = Jadwal::all();
            return view('admin.jadwal', compact('jadwal'));
        }
    }

    public function edit($id)
    {
        return view('admin.edit-jadwal', [
            'jadwal' => Jadwal::find($id),
        ]);
    }

    public function update($id, Request $request){
        $jadwal = Jadwal::find($id);
        
        $jadwal->update($request->except(['_token']));
        $jadwal->save();
        return redirect('/jadwal');
    }

    public function create(Request $request){
        return view('admin.create-jadwal', [
            'request' => $request
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'jam' => 'required',
            'matkul' => 'required',
            'dosen' => 'required',
            'kelas' => 'required'
        ]);
        Jadwal::create($validatedData);

        return redirect('/jadwal');
    }


    public function delete($id, Jadwal $jadwal)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }

    public function editjadwal()
    {
        if(Auth::user()->role == 1 && 2){
            $jadwal = Jadwal::all();
            return view('user.edit-jadwal', compact('jadwal'));
        }
    }

    // public function editjadwal($id, Jadwal $jadwal)
    // {
    //     $jadwal = Jadwal::find($id);
    //     $jadwal->update($request->except(['_token']));
    //     $jadwal->save();
    //     return redirect('/user/detail');

    // }
}
