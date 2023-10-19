@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <h1 class="mb-4">Blogs Category</h1>

            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <div class="card text-bg-dark">
                        <a href="/blog?category={{ $category->slug }}">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill text-white py-2 fs-4"
                                    style="background-color: rgba(0, 0, 0, 0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
