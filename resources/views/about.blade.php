@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h1>About</h1>
            <img src="img/{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
            <h3>{{ $name }}</h3>
            <h4>{{ $jurusan }}</h4>
        </div>
    </div>
@endsection
