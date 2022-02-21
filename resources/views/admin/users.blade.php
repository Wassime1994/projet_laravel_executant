@extends('layouts.index')
@section('content')
<h1 class="text-center text-5xl ">Utilisateurs enregistrés</h1>
@forelse ($data as $item )
    <div class="flex justify-center items-center my-5 ">
        <div class="flex justify-between">
            <div class="mx-2">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src={{asset('img/'.$item->avatar->img)}}>
            </div>
            <div>
              <h2 class="text-gray-800 text-2xl font-semibold">{{$item->name}}</h2>
              <p class="mt-2 text-gray-600">Role : {{$item->role->role}}</p>
            </div>
        </div>
    <div class="mx-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href={{route('user.show',$item->id)}}>SHOW</a>
        </button>
        <form action={{route('users.destroy' , $item->id)}} method="POST">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
        </form>
      </div>

  </div>
@empty
<h1 class="text-red text-3xl text-center">Aucun utilisateurs enregistrés </h1>
@endforelse

<div class="flex justify-center">
    <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href={{route('dashboard')}}>
        Retour
    </a>
    </button>

</div>
 {{$paginate->links('pagination::bootstrap-4')}}

@endsection
