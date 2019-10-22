@extends('base')

@section('header', 'Editar Post')

@section('conteudo')  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input value="{{$post->titulo}}" type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do post">
        </div>
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input value="{{$post->descricao}}" type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao do post">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" id="categoria" name="categoria">
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            </select>
        </div>
        <div class="form-group">
            <label for="texto">Conteudo</label>
            <textarea class="form-control" id="texto" rows="3" name="texto">{{$post->texto}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>

    </form>
@endsection