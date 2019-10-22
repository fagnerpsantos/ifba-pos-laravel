@extends('base')

@section('header', 'Blog IFBA')

@section('conteudo')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="row">
@foreach ($posts as $post)
<div class="col-md-4">
    <h2>{{$post->titulo}}</h2>
    <p>{{$post->descricao}}</p>
    <p><a class="btn btn-secondary" href="{{route('posts.show', $post->id)}}" role="button">Ver post »</a></p>
</div>
@endforeach
</div>
@endsection