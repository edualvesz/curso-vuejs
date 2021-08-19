<template>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</template>

<script>
    export default {
       props:['lista'],
       mounted:function(){
           console.log(this.lista);
       }
    }
</script>