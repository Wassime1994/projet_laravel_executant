<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home () {
        return view('welcome');
    }
    public function destroy (User $id) {
        $id->delete();
        return redirect()->back() ;
    }

    public function show (User $id) {
       $data = $id ;
       return view('admin.user.user_show', compact('data')) ;
    }

}
