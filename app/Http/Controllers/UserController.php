<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use Input;

class UserController extends Controller
{

    public function index()
    {
            $query = User::query();

            if(Input::has('premium')) {

                $query->where('premium', Input::get('premium'));
            }

            $list_user = $query->distinct()->select('id','name','email','status_user','premium')->get();

            return view('admin.banned-user',compact('list_user')); 
    }

    public function updatestatus(Request $request, $id)
    { 
        
        $user = User::where('id',$id);

        $user->status_user = $request->input('status_user');
      
        $user->update(['status_user' => $request->status_user]);


        return redirect()->back();
    }

    public function updatepremium(Request $request, $id)
    { 
        
        $user = User::where('id',$id);

        $user->premium = $request->input('premium');
      
        $user->update(['premium' => $request->premium]);


        return redirect()->back();
    }




    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('akun', compact('user'));
    }


     public function edit2(User $user)
    {   
        $user = Auth::user();
        return view('rekening', compact('user'));
    }



    public function update(User $user)
    { 
        $this->validate(request(), [
            'status' => 'string|max:255',
        ]);

        $user->status = request('status');
        $user->update( ['status' => $user->status ] );


        return redirect()->route('products.index');
    }

  



    public function ubah(User $user, Request $request)
    { 
        $this->validate(request(), [
            'no_hp' => 'string|max:13',
            'email' => 'email|max:255',
            'detail_toko' => 'string|max:255'
        ]);


        if ($request->hasFile('photo')) {

        $photo = $request->file('photo')->getClientOriginalName();

        $destination = base_path() . '/public/uploads';

        $request->file('photo')->move($destination, $photo);

        $user->photo = $photo;

        }

        $user->no_hp = request('no_hp');
        $user->email = request('email');
        $user->detail_toko = request('detail_toko');
        $user->lokasi = request('lokasi');
        $user->update(['nomor handphone' => $user->no_hp,'email' => $user->email, 'detail_toko' => $user->detail_toko, 'lokasi' => $user->lokasi, ]);

        return redirect()->route('products.index');
    }

      public function ubah2(User $user)
    { 
        $this->validate(request(), [
            // 'no_rek' => 'string|max:255',
            // 'atas_nama' => 'string|max:255',
            // 'bank' => 'string|max:255',
            // 'cabang_bank' => 'string|max:255',
        ]);

        $user->kurir_jne = request('kurir_jne');
        $user->kurir_jt = request('kurir_jt');
        $user->kurir_pos = request('kurir_pos');
        $user->update(['kurir_jne' => $user->kurir_jne,'kurir_jt' => $user->kurir_jt, 'kurir_pos' => $user->kurir_pos,]);

        return redirect()->route('products.index');
    }


    public function delete($id)
    { 
        
        $user = User::find($id);
        $user->delete();
        return redirect()->route('products.index');
    }

}
