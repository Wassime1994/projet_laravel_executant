<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function users() {
        $data=User::where('role_id',3)->get() ;
        $paginate=User::paginate(2) ;
        return view('admin.users', compact('data' , 'paginate')) ;
    }

    // {{paginate->links('pagination::bootstrap-4')}}

    public function avatars() {
        $data= Avatar::all();
            return view('admin.avatar_list' , compact("data")) ;
    }



    public function myprofil (User $id) {
        $data= Avatar::all() ;
        return view('admin.user.myprofil', compact('data')) ;
     }
     public function update(User $id, Request $request){
        $data = $id;
        $data->name=$request->name ;
        $data->prenom=$request->prenom ;
        $data->email=$request->email ;
        $data->age=$request->age ;
        $data->avatar_id=$request->avatar;
        $data->save() ;
        return redirect()->route('admin.myprofil') ;
     }
}
