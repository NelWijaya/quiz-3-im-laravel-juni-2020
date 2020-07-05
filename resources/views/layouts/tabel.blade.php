@extends('layouts.master')


@section('content')
    <h1 class="h3 mb-4 text-gray-800">List Article</h1>
    <a href="/artikel/create" class="btn btn-success btn-sm mb-5"><i class="fas fa-plus-circle"></i>Make New Article</a>
    <table class="table table-bordered">
    <thead>
            <tr>
            <th style="width: 10px">#</th>
            <th style="width: 200px">Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Author</th>
            <th style="width: 100px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $items)
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$items->judul}}</td>
                <td>
                    <p>{{$items->isi}}</p>
                </td>
                <td>
                    <p>{{$items->slug}}</p>
                </td>
                <td>
                    <span>{{$items->username}}</span>
                </td>
                <td>
                <a href="/artikel/{{$items->id_artikel}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Lihat</a>
                <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit</a> -->
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
