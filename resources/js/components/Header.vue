<template>
  <div class="ms_bg">
       <h3 class="text-center py-4">
           <router-link to="/main">Tutte le macchine</router-link>
       </h3> 
    </div>
</template>

<script>

export default {
   name: 'Header',
}
</script>

<style lang='scss' scoped>

   a{
    text-decoration: none;
    color: black;
    &:hover{
        color:magenta;
    }
   }

   .ms_bg{
    background-color: rgb(27, 88, 194);
   }
</style>