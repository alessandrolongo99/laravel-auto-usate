<template>

    <div class="container">
        <h3 class="text-center py-4"> Tutte le macchine </h3>
        <div class="d-flex justify-content-center flex-wrap">
            <CarCard v-for="car in cars" :key="car.id" :car="car" />
        </div>
    </div>
    
</template>
    
    <script>
    import Axios from 'axios';
    import CarCard from './CarCard.vue';

    export default {
        name: "App",
        data:function(){
            return{
                cars : [],
                isLoading : true,
            }
        },
        components:{
            CarCard,
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