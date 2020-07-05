@extends('layouts.master')


@section('content')
    <h1 class="h3 mb-4 text-gray-800">Article Detail</h1>
    <div class="card" >
        <div class="card-body">
            <h4 class="card-title">Judul : {{$users->judul}}</h4>
            <h6 class="card-subtitle mb-2 text-muted">slug : {{$users->slug}} <span style="float: right;">Author: {{$users->username}}</span></h6>
            <p class="card-text mt-2 mb-4">{{$users->isi}}</p>
            <?php
                $pieces = explode(" ",$users->tag );
                $i = 0;
            ?>
            @foreach($pieces as $kunci=>$benda)
                <a href="#" class="btn btn-info mb-4">#{{$pieces[$i]}}</a>

                <?php $i++; ?>
            @endforeach
            <br>
            <a href="/artikel/{{$users->id_artikel}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
            <form action="/artikel/{{$users->id_artikel}}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
            </form>
            <a href="/artikel" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
@endsection
