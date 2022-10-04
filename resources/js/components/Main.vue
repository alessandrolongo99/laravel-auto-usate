<template>
    <div>
        <div v-if='isLoading'>
          <Loader />
        </div>
        <div v-else class="d-flex justify-content-center flex-wrap ms_bg">
          <CarCard v-for="car in cars" :key="car.id" :car="car" />
        </div>
   </div>
</template>

<script>
import Axios from 'axios';
import Loader from './Loader.vue';
import CarCard from '../components/CarCard.vue';
export default {
    data:function(){
            return{
                cars : [],
                isLoading : true,
            }
        },
        components:{
            CarCard,
            Loader
        },
        methods:{
            getCars(){
                Axios.get('/api/cars',{
                }).then((response) => {
                    this.cars = response.data.results.data;
                    this.isLoading = false;
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

<style scoped>
   .ms_bg{
    background-color: yellowgreen;
   }
</style>