@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-success mb-3">{{ $post->title }}</h2>

                <p>By. <a href="/author/{{ $post->author->username }}"
                        class="text-decoration-none fw-bold">{{ $post->author->name }}</a>
                    in <a href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                <p>

                    @if ($post->image)
                        <div class="mb-3" style="max-height: 400px; overflow: hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid rounded-top">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid my-2">
                    @endif

                    {!! $post->body !!}

                    <a href="/blog" class="btn btn-danger my-3">Back</a>
            </div>
        </div>
    </div>
@endsection
