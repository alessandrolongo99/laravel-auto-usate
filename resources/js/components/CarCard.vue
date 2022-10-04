<template>
  <div class="card text-center m-3" style="width: 21rem;">
    <div class="card-header"> Brand: {{ car.brand }} </div>
    <div class="card-body">
      <h5 class="card-title">
        <router-link :to="'/SingleCar/' + car.id">Modello: {{ car.model }}</router-link>  
      </h5>
      <p class="card-text">
        Colore: {{ car.color }}
      </p>
      <p class="card-text">
        License plate: {{ car.license_plate }}
      </p>
    </div>
    <div class="card-footer text-muted">{{ car.mileage }}Km </div>
  </div>
</template>

<script>
export default {
    props: {
        car: Object,
    },
    methods:{
    },

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
</style>