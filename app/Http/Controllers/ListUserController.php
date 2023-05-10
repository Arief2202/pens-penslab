<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\ListUser;

class ListUserController extends Controller
{
    public function index() {

        if(Auth::user()->role == 1){
            // return view('admin.list-ruangan');
            $user = ListUser::all();

            // dd($ruangan->load(['fasilitases']));
            
            return view('admin.list-user', compact('user'));

        }
    }

    public function edit($id)
    {
        return view('admin.edit-user', [
            'user' => ListUser::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        // $request->validate([
        //     'nrp' => ['required', 'string', 'max:255'],
        //     'nama' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'max:255'],
        //     'password' => ['required', 'string', 'max:255'],
        //     'role' => ['required', 'integer', 'max:255'],
        // ]);
        // // dd($request);
        // $queryUser = User::where('id', $request->id)->first();
        // $queryValid = User::where('id', '!=', $request->id)
        //                     ->where('nip', '=', $request->nrp)
        //                     ->where('email', '=', $request->email)
        //                     ->first();
        // // $queryValid2 = User::where('nip', '=', $request->nip)
        // //                     ->where('email', '=', $request->email)
        // //                     ->first();
        // if($request->password != $queryUser->password){
        //     $request->password = Hash::make($request->password);
        // }
        // if($queryValid){
        //     $user = User::where('id', $request->id)->first();
        //     $email = Email::where('id', $request->id);
        //     return view('admin.list-user', [
        //         "email" => $email,
        //         "errorMessage" => 'Data sudah ada di database',
        //     ]);
        // }
        // // else if($queryValid2){
        // //     $dosen = User::where('id', $request->idDosen)->first();
        // //     $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $request->idDosen);
        // //     return view('dosen.update', [
        // //         "dosen" => $dosen,
        // //         "errorMessage" => 'Data sudah ada di database',
        // //     ]);
        // // }
        // else{
        //     $queryDosen['nip'] = $request->nip;
        //     $queryDosen['nama'] = $request->nama;
        //     $queryDosen['alias'] = $request->alias;
        //     $queryDosen['email'] = $request->email;
        //     $queryDosen['password'] = $request->password;
        //     $queryDosen['bebanMengajar'] = $request->bebanMengajar;
        //     $queryDosen['role'] = $request->role;
        //     $queryDosen->save();
        //     return redirect("/dosen");
        // }
        
        $user = ListUser::find($id);
        $user->update($request->except(['_token']));
        // $user->password=bcrypt($request->password);
        // dd($request->all());
        // $request->user()->update(
        //     $request->all()
        // );
        $user->save();

        return redirect('/admin/list-user');
    }

    public function delete($id, ListUser $user) {
        $user = ListUser::find($id);
        $user->delete();
        return redirect('/admin/list-user');
    }

    public function view($id, ListUser $user) {
        // if(Auth::user()->role == 2){
        //     // return view('admin.list-ruangan');
        //     $user = ListUser::all();

        //     // dd($ruangan->load(['fasilitases']));
            
        //     return view('user.form-user', compact('user'));

        // }
        $user = ListUser::find($id);
        // $user = ListUser::all();
        return view('user.form-user', compact('user'));
    }
    public function update_profile($id, Request $request){
        // dd($request);
            $user = ListUser::find($id);
            $user->update($request->except(['_token']));
            // $user->password=bcrypt($request->password);
            // $request->user()->update(
            //     $request->all()
            // );
            
            $user->save();
            return redirect('/ruangan');
    }
    public function profile($id, ListUser $user)
    {
        $user = ListUser::find($id);  
        return view('user.profile', compact('user'));
    }
}
