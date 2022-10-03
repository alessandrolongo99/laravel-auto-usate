<template>

    <!-- <div class="container">
        <h3 class="text-center py-4"> Tutti i post </h3>
        <div class="d-flex justify-content-center flex-wrap">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
    
        <div class="py-5">
            <h2 class="text-center py-4">Titoli dei post per ogni tag</h2>
            <div class="d-flex flex-wrap justify-content-center">
                <TagCard v-for="tag in tags" :key="tag.id" :tag="tag"/> 
            </div>
        </div>
    </div> -->

    <div>
        <div v-for="car in cars" :key="car.id">
            {{ car.model }}
        </div>
    </div>
    
</template>
    
    <script>
    import Axios from 'axios';
    export default {
        name: "App",
        data:function(){
            return{
                cars : [],
                isLoading : true,
            }
        },
        components:{

        },
        methods:{
            getCars(){
                Axios.get('/api/cars',{
                }).then((response) => {
                    console.log(response.data.results);
                    this.cars = response.data.results.data;
                }).catch((error) => {
                    console.error(error);
                })
            },
        },
        created(){
            this.getCars();
        }
    
    
    }
    </script>
    
    <style>
    
    </style>