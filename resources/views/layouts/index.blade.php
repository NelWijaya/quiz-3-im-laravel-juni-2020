@extends('layouts.master')


@section('content')
    <h1 class="h3 text-gray-800">ERD Picture</h1>
    <a href="/artikel" class="btn btn-info btn-sm mb-4"><i class="fas fa-eye"></i>See Article</a>
    <div class="image">
        <img src="{{asset('/erd/erd.png')}}" alt="erd.png">
    </div>

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
