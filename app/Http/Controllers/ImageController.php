<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Image::all() ;
        return view('image.gallery', compact('data'));
    }

    public function all()
    {
        $data=Image::all() ;
        $dataCategorie=Categorie::all() ;
        return view('admin.user.mesImage', compact('data','dataCategorie')) ;
    }

    public function store(Request $request)
    {

            // STORAGE
            $path = "img/"  ;
            $file = $request ->file("img_gallery");
            $new_image = date('Ymd').uniqid().'.jpg' ;
            // dd($file);
            $file->move(public_path($path),$new_image) ;
            // DB
            $file=new Image();
            $file->img = $new_image ;
            
            $file->description = $request->description ;
            $file->categorie_id = $request->categorie_id ;


            $file->save();
            return redirect()->back() ;


    }

    // PROPOSER INPUT AVEC LES CATEGORIES
    //






    public function destroy(Image $id)
    {
        $id->delete() ;
        return redirect()->back() ;

    }
}
