<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{

    public function create()
    {
        return view('admin.avatar_add') ;
    }


    public function store(Request $request)
    {

            // STORAGE
            $data=Avatar::all() ;
            if(count($data) <   7  ){

                 $path = "img/"  ;
                 $file = $request ->file("avatar_img");
                 $new_image = date('Ymd').uniqid().'.jpg' ;
                 // dd($file);
                 $file->move(public_path($path),$new_image) ;
                 // DB
                 $file=new Avatar();
                 $file->img = $new_image ;
                 $file->nom = $request->nom ;
                 $file->save();

                 return redirect()->back()->with('success','Avatar ajouté avec succés') ;
                                }


            else {
                return redirect()->back()->with('warning' ,"AJOUT IMPOSSIBLE , MAX 7") ;
            }


    }

    public function destroy(Avatar $id)
    {
        $id->delete() ;
        return redirect()->back() ;
    }
}
