@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <div class="row">
                <div class="col-md-4">
                    <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion-ios-book-outline"> <!-- Essa url faz o link funcionar -->
                        
                    </caixa>
                </div>
                
            
                <div class="col-md-4">
                    <caixa qtd="1500" titulo="Usuários" url="{{route('usuarios.index')}}" cor="blue" icone="ion-person-stalker">
                        
                    </caixa>
                </div>

            
                <div class="col-md-4">
                    <caixa qtd="3" titulo="Autores" url="{{route('autores.index')}}" cor="red" icone="ion-person">
                        
                    </caixa>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
