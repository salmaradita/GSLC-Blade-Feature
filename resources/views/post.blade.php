@extends('layouts.main')

@section('container')

    <div class="card">
        <div class="card-body">
            <h1 class="mb-5">{{$post->title}} </h1>
            {!! $post->body !!}
        </div>
    </div>

    <a class="btn btn-primary mt-5" href="/blog" role="button">Back</a>
    <br/>
    <br/>

@endsection
