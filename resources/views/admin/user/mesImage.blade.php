@extends('layouts.index')

@section('gallerie')
<h1 class="text-5xl text-center m-4">Modifications de mes images </h1>
<div class="flex">
 @forelse ($data as $item )
<div class="mx-auto">
    <div class="flex justify-center">
        <div class="mx-5">
            <img class="gallery_image" src={{asset('img/'.$item->img)}} alt="">
            <span>Image numero {{$item->id}} </span>
            <form action={{route('image.destroy' , $item->id)}} method="POST">
                @csrf
                @method("DELETE")
                <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Delete
                  </button>
            </form>
        </div>
    </div>
    <form action={{route('image.store' , $item->id)}}   method="POST" enctype="multipart/form-data" >
        @csrf
        <div id="div" class="hidden m-4">
            <input type="file" name="img_gallery"> <br>
            <label for="">Description de l'image : </label>
            <input name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nom Image">

    <label for="categorie">Choissisez planete d'origine:</label>
            <select name="categorie_id" id="categorie">
                @forelse ($dataCategorie as $categorie )
                <option value={{$categorie->id}}>{{$categorie->categorie}}</option>
                @empty
                <h1>Aucune categories</h1>
                @endforelse
            </select>

            <button type="submit" class="m-5 p-3 block text-white bg-black-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  data-modal-toggle="defaultModal">
                    ADD IMAGE
              </button>
        </div>
    </form>

</div>
@empty
<h1>Aucune images crées</h1>
@endforelse
</div>

<button id="btnAdd" class=" m-5 bg-green hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
 Ajouter Image
</button>

<div class="flex justify-center p-5">
<button class="bg-green hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
<a href={{route('dashboard')}}>RETOUR DASHBOARD</a>
</button>
</div>










<style>
.gallery_image{
    height: 200px ;
    width:100px ;
    border: 20px solid black ;
}
</style>

<script>
let btn = document.getElementById('btnAdd')
let div = document.getElementById('div')
btn.addEventListener('click' , () => {
    div.className="block m-3 "
    btn.className = "hidden"
})
</script>

@endsection

