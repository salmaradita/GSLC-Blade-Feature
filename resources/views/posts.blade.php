
@extends('layouts.main')

@section('container')

    <div class="alert alert-secondary" style="--bs-bg-opacity: .5;" role="alert">
        <h1 class="mb-3">The Myers Briggs Types</h1>
    </div>



    @foreach ($posts as $post)

        <div class="card mb-3">
            <div class="card-body">
                <article>
                    <h2>
                        <a href="/posts/{{ $post->slug }} ">{{$post->title}}</a>
                    </h2>
                    <p>{{$post->excerpt}} </p>
                </article>
            </div>
        </div>

    @endforeach

@endsection
