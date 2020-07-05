@extends('layouts/master')

@section('content')
<form action="/artikel" method="POST">
@csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isiArtikel">Isi artikel</label>
    <textarea class="form-control" id="isiArtikel" rows="15" name="isi"></textarea>
  </div>
  <div class="form-group">
    <label for="slug">slug</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@push('scripts')
  <script>
    $("#judul").on('keyup',function(){
      $('#slug').val($('#judul').val().toLowerCase());

    });
  </script>
@endpush