<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Categorie::all();
        return view('admin.user.categorie', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Categorie() ;
        $all = Categorie::all() ;
        if(count($all)<4) {

            $data->categorie = $request->categorie ;
            $data->save() ;
            return redirect()->back()->with('success', 'CATEGORIE AJOUTE AVEC SUCCES !!!') ;

        }
        else {
            return redirect() ->back() ->with('warning','NOMBRE MAX ATTEINT DE CATEGORIE ! ') ;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    public function destroy(Categorie $id)
    {
        $id->delete() ;
        return redirect()->back() ;
    }
}
