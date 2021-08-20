@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>
            <tabela-lista 
            v-bind:titulos="['#', 'Título', 'Descrição']"
            v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO'], [2, 'Vue JS', 'Curso de Vue JS']]"
            ordem="asc" ordemCol="2" 
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="45678666"
            
            ></tabela-lista>
        </painel>
    </pagina>
<modal name="meuModalTeste">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</modal>
@endsection
