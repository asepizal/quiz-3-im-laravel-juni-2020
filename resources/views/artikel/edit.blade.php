@extends('layouts/master')

@section('content')

<form action="/artikel/{{ $artikel->id}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
  </div>
  <div class="form-group">
    <label for="isiArtikel">Isi artikel</label>
    <textarea class="form-control" id="isiArtikel" rows="15" name="isi">{{$artikel->isi}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection