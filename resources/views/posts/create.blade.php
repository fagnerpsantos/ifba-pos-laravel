@extends('base')
@section('header', 'Cadastrar post')

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
<form method="post" action="{{route('posts.store')}}">
@csrf
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do post">
  </div>
  <div class="form-group">
    <label for="descricao">Descricao</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao do post">
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
    <textarea class="form-control" id="texto" rows="3" name="texto"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection