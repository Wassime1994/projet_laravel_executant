@extends('layouts.index')
@section('content')
<!-- component -->
<div class="flex flex-col min-h-screen justify-center items-center text-white bg-gray-400">
    <div class="flex flex-wrap justify-center">
              <!--CARD -->
            @forelse ($data as $item )

            <div class="flex p-4 ml-5 md:p-10">
             <div class="w-full flex items-center justify-center bg-transparent">
                <div class="relative w-48 md:w-52 h-14 sm:h-14 md:h-16 bg-gradient-to-r from-purple-700 to-purple-900 rounded-br-full pt-4 pb-8 px-4 shadow-md hover:shadow-lg transition flex flex-col items-center">
                          <div class="absolute rounded-full bg-transparent w-16 md:w-20 md:h-20 md:p-2 z-10 -top-2 md:-top-4 -left-12 md:-left-14 transition ">
                                <div class="rounded-full bg-black w-16 sm:w-18 md:w-20 overflow-auto">
                                  <img src={{asset('img/'.$item->img)}} class="">
                                </div>
                          </div>
                  <div class="flex flex-col space-y-2 md:space-y-4">
                  <label class="absolute font-bold text-gray-100 text-md text-start top-1 left-8 sm:left-10">
                        Avatar numero {{$item->id}}
                    </label>
                    <form action={{route('avatar.destroy', $item->id)}} method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-1 m-2 rounded">
                            Delete
                          </button>

                    </form>

                    </div>
                </div>
             </div>
            </div>
            @empty
<h1>Aucun avatars disponibles</h1>
            @endforelse
        </div>
        <div class="flex justify-center">
    <div >
        <form action={{route('avatar.store')}} enctype="multipart/form-data"method="POST" >
            @csrf
            <div id="div" class="hidden m-4">
                <input type="file" name="avatar_img">
                <button type="submit" class="m-5 p-3 block text-white bg-black-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
                        ADD AVATAR
                  </button>
            </div>
        </form>
    </div>
    <div>
    </div>
<div class="mx-3">
    <button id="btnAdd" class="bg-green hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Ajouter Avatar
    </button>
</div>
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
