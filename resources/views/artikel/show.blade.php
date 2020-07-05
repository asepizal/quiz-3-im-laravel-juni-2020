@extends('layouts/master')

@section('content')
   <div class="card p-2">
    <p>Judul : {{ $artikel->judul }}</p>
    <p>Isi : {{$artikel->isi }}</p>

   </div>

@endsection