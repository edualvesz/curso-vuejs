<template>
  <div v-bind:class="defineCor">
      <div class="panel-heading">{{titulo}}</div>

      <div class="panel-body">
          <slot></slot>
      </div>
  </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
          defineCor: function(){
            return "panel "+ (this.cor || "panel-default");
          }
        }
    }
</script>

<style media="screen"> 
        .green {                 /*Cores escolhidas atraves da opção inspecionar elemento... foram mudadas as cores dos paineis */
        border-color: #dff0d8;
        }

        .green > .panel-heading {
        color: #323c32;
        background-color: #dff0d8;
        border-color: #dff0d8;
        }
</style>