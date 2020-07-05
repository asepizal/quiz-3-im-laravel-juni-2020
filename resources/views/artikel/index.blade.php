@extends('layouts/master')

@section('content')
    <h1>Daftar Artikel</h1>
    <a href="/artikel/create" class="btn btn-primary">
        Tambah artikel
    </a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>isi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artikel as $key => $a)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $a->judul }}</td>
                <td>{{ $a->isi }}</td>
                <td>
                    <a href="/artikel/{{$a->id}}" class="btn btn-sm btn-info">show</a>
                    <a href="/artikel/{{$a->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                    <form action="/artikel/{{$a->id}}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush