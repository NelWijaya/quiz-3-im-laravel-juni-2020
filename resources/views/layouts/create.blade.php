@extends('layouts.master')


@section('content')
    <h1 class="h3 mb-4 text-gray-800">Form New Article</h1>
    <form action="/artikel" method="POST" style="padding: 50px;">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" name="isi" required></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" id="tag" name="tag" required>
        </div>

        <div class="form-group">
            <label for="id_pembuat">Choose Author Username :</label>
            <select name="id_pembuat" id="id_pembuat">
                @foreach($users as $key => $items)
                    <option value="{{$items->id}}">{{$items->username}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
