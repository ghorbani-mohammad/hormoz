
@extends('master')

@section('container')
    <div style="height:2rem;"></div>
    @foreach($posts as $post)
        @include('posts.post')
        @if(!$loop->last)
            <div style="height: 50px;"></div>
        @endif
    @endforeach
@endsection
