@extends('base')
@section('header', $post->titulo)

@section('conteudo')
@if (Auth::check())
<div class="row">
<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    @csrf
    @method('DELETE')      
    <button type="submit" class="btn btn-danger">Remover</button>
</form>
<a href="{{route('posts.edit',$post->id)}}"><button class="btn btn-primary">Editar</button></a>
</div>
@endif
<h2>{{$post->descricao}}</h2>
<div>
<p>{{$post->texto}}</p>
</div>
@endsection