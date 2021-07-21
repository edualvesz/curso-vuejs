@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            Teste de conteúdo
            <div class="row">
                <div class="col-md-4">
                    <caixa qtd="80" titulo="Artigos" url="#" cor="orange" icone="ion-ios-book-outline">
                        
                    </caixa>
                </div>
                
            
                <div class="col-md-4">
                    <caixa qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion-person-stalker">
                        
                    </caixa>
                </div>

            
                <div class="col-md-4">
                    <caixa qtd="3" titulo="Autores" url="#" cor="red" icone="ion-person">
                        
                    </caixa>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
