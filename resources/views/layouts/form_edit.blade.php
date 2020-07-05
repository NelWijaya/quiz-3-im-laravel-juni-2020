@extends('layouts.master')


@section('content')
<h1 class="h3 mb-4 text-gray-800">Form New Article</h1>
    <form action="/artikel/{{$users->id_artikel}}" method="POST" style="padding: 50px;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" id="judul" name="judul" value="{{$users->judul}}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" name="isi" required>{{$users->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" id="tag" name="tag" value="{{$users->tag}}" required>
        </div>

        <div class="form-group">
            <label for="id_pembuat">Author Username (<i>can't changes because its edit</i>): <span>{{$users->username}}</span></label>
        </div>

        <button type="submit" class="btn btn-primary">Submit This Edit</button>
    </form>
@endsection
