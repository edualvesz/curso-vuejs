<template>
      <div>
        <a v-if="criar" v-bind:href="criar">Criar</a> 
        <div class="form-inline"> <!--campo de busca -->
          <div class="form-group pull-right">
            <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
          </div>
        </div>   
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos">{{titulo}}</th> <!--o metodo para inverter clicando no titulo da coluna sera lancado aqui -->
                                                                                                                             <!--o cursor:pointer vai transformar em maozinha quando o ponteiro do mouse passarpor cima --> 
              <th  v-if="detalhe || editar || deletar">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in lista"> <!--lista foi pega do script computed-->
              <td v-for="i in item">{{i}}</td>
              
              <td v-if="detalhe || editar || deletar">
                <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="POST">    
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" v-bind:value="token">

                    <a v-bind:id="index" v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                    <a v-if="editar" v-bind:href="editar"> Editar |</a> 
                    <a href="#" v-on:click="executaForm(index)"> Deletar</a>
                    
                </form>
                  <span v-if="!token">
                    <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                    <a v-if="editar" v-bind:href="editar"> Editar |</a> 
                    <a v-if="deletar" v-bind:href="deletar"> Deletar </a> 
                  </span>
                  <span v-if="token && !deletar">
                    <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                    <a v-if="editar" v-bind:href="editar"> Editar |</a> 
                  </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
</template>
<script>
    export default {
      props:['titulos','itens', 'ordem', 'ordemCol', 'criar', 'detalhe', 'editar', 'deletar', 'token',],
      data: function(){
        return{
          buscar:'',
          ordemAux: this.ordem || "asc",       //correção para a inspeção de elemento não xingar
          ordemAuxCol: this.ordemCol || 0
        }
      },
      methods:{
        executaForm: function(index){
          document.getElementById(index).submit()
        },
        ordenaColuna: function(coluna){        //metodo para inverter clicando no titulo
          this.ordemAuxCol = coluna;
          if(this.ordemAux.toLowerCase() == "asc"){
            this.ordemAux = 'desc';
          } else {
            this.ordemAux = 'asc';
          }
        }
      },
      computed:{             //aqui é onde sera feita a busca
        lista:function(){ 

          let ordem= this.ordem || "asc";
          let ordemCol = this.ordemcol || 0;
          ordem = ordem.toLowerCase();
          ordemCol = parseInt(ordemCol);          //ordemCol vai deixar a coluna dinamica
            if(ordem == "asc"){                   //lógica dinamica
                this.itens.sort(function(a,b){       
                if (a[ordemCol] < b[ordemCol]) {return 1;}
                if (a[ordemCol] > b[ordemCol]) {return -1;}
                return 0;
              });
            } else {
                 this.itens.sort(function(a,b){       
                if (a[ordemCol] > b[ordemCol]) {return 1;}
                if (a[ordemCol] < b[ordemCol]) {return -1;}
                return 0;
              });
            }  

          return this.itens.filter(res => {
            for(let i = 0; i < res.length; i++){
              if ((res[i] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) { // esse if é para filtrar todos os campos titulo, descrição e ação
                return true;
                }
              } 
                return false; 
            });  
        }
      }
    }
</script>

