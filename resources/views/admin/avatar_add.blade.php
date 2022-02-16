@extends('layouts.index')
@section('content')
    <form action="" method="POST">
        @csrf
        <input type="file">

    </form>
@endsection
