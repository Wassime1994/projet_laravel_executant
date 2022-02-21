@extends('layouts.index')
@section('categorie')
<h1 class="text-center text-5xl mb-5">Mes catégories</h1>
<h1 class="text-center text-5xl mb-5">Nombre de catégories : {{count($data)}} /4</h1>

@include('layouts.flash')
@forelse ($data as $item )

<div class="block p-6 ma x-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->categorie}}</h5>



    <form action={{route('categorie.destroy', $item->id)}} method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Supprimer
          </button>
         </form>
        </div>
@empty
<h1>
    Aucune catégories ajoutés .
</h1>

@endforelse
<div class="mx-3 my-5">
    <button id="btnAdd" class="bg-green hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Ajouter Categorie
    </button>
</div>


<form action={{route('categorie.store')}} method="POST">
@csrf
<div id="div" class="hidden m-4">
    <input name="categorie" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
    <button type="submit" class="m-5 p-3 block text-white bg-black-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
            ADD CATEGORIE
      </button>
</div>
</form>



<div class="flex justify-center my-5 ">
<button type="button" data-modal-toggle="walletModal" class="p-3 text-gray-900 bg-white hover:bg-green-100 border border-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
    <a href={{route('dashboard')}}> RETOUR</a>
  </button>
</div>

<script>
    let btn = document.getElementById('btnAdd')
    let div = document.getElementById('div')
    btn.addEventListener('click' , () => {
        div.className="block"
        btn.className = "hidden"
    })
    </script>

@endsection
