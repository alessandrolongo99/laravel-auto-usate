<template>

    <div class="container ms_pt-3">
        <Header />
        <router-view></router-view>
        
    </div>
    
</template>
    
    <script>
    
    import Header from '../components/Header.vue'
    export default {
        name: "App",
        components:{
            Header
        }
    
    }
    </script>
    
    <style scoped>
      .ms_pt-3 {
         padding-top: 3rem;
       }
    </style>