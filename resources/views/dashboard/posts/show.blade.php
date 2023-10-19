@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-success my-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to all
                    my
                    post</a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span
                        data-feather="edit"></span> Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline mb-2">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><span
                            data-feather="slash"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid my-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid my-3">
                @endif

                {!! $post->body !!}

            </div>
        </div>
    </div>
@endsection
