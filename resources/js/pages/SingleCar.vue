<template>
  <section>
    <div v-if="isLoading">
      <Loader />
    </div>
    <section v-else class="container ms_pt-6 d-flex justify-content-center ms_bg">
      <div class="row">
        <div class="col-12">
          <div class="card text-center m-3" style="width: 21rem">
            <div class="card-header">Brand: {{ car.brand }}</div>
            <div class="card-body">
              <h5 class="card-title">Modello: {{ car.model }}</h5>
              <p class="card-text">Colore: {{ car.color }}</p>
              <p class="card-text">License plate: {{ car.license_plate }}</p>
            </div>
            <div class="card-footer text-muted">{{ car.mileage }}Km</div>
          </div>
        </div>
      </div>
    </section>
  </section>
</template>

<script>
import axios from "axios";
import Loader from "../components/Loader.vue";
export default {
  components:{
    Loader
  },
  data: function () {
    return {
      isLoading: true,
      car: {},
    };
  },

  methods: {
    getCar() {
      const id = this.$route.params.id;
      axios.get(`/api/cars/${id}`).then((response) => {
        this.car = response.data.results;
        console.log(this.car);
        this.isLoading = false;
      });
    },
  },

  created() {
    this.getCar();
  },
};
</script>

<style scoped>
.ms_pt-6 {
  padding-top: 6rem;
}

.ms_bg {
  background-color: yellowgreen;
  height: 80vh;
}
</style>

