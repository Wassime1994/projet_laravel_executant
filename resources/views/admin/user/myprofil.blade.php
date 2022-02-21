@extends('layouts.index')
@section('content')
<div class=" my-5 mx-5 flex items-center justify-between">
<div class="my-5 ">
<h1 class="text-center text-5xl mb-4">My Profil</h1>
<img class="myprofil" src={{asset('img/'.Auth::user()->avatar->img)}} alt="myprofil">
<h2 class="mb-3"><span class="text-green">Nom : </span>{{Auth::user()->name}}       </h2>
<h2 class="mb-3"><span class="text-green">Prénom : </span>{{Auth::user()->prenom}}       </h2>
<h2 class="mb-3"><span class="text-green"> Email : </span> {{Auth::user()->email}}    </h2>
<h2 class="mb-3"><span class="text-green"> Age : </span> {{Auth::user()->age}}    </h2>
<h2 class="mb-3"><span class="text-green"> Role : </span> {{Auth::user()->role->role}}      </h2>
<h2 class="mb-3"><span class="text-green"> Avatar : </span> {{Auth::user()->avatar->img}}      </h2>

</div>

<div class="w-full max-w-xs">
    <h2>Modifier mon profil</h2>
    <form action={{route('user.update', Auth::user()->id)}} method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
         Nom
        </label>
        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value={{Auth::user()->name}} />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
         Prenom
        </label>
        <input  name="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value={{Auth::user()->prenom}} />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
         Age
        </label>
        <input name="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value={{Auth::user()->age}} />
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
         Email
        </label>
        <input name='email' class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" value={{Auth::user()->email}}>
      </div>
      <div class="mb-6">
        <select name="avatar">
            @forelse ($data as $item )
            <option value ={{$item->id}} class="choice" >{{$item->nom}}</option>
            @empty
        @endforelse
            </select>
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Modifier Profil
      </button>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
    </p>
  </div>
<div class="flex justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      <a href={{route('dashboard')}}>-></a>
    </button>
</div>
</div>
</div>








  <style>
      .myprofil {
          height :200px
      }
      span {
          color : greenyellow ;
          font-size: 20px
      }
  </style>
@endsection
