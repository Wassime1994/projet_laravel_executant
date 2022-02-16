<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function users() {
        $data=User::where('role_id',2)->get() ;
        return view('admin.users', compact('data')) ;
    }
    public function avatars() {
        $data= Avatar::all();
        return view('admin.avatar_list' , compact("data")) ;
    }
    public function myprofil (User $id) {
        $data= Avatar::all() ;
        return view('admin.user.myprofil', compact('data')) ;
     }
}
