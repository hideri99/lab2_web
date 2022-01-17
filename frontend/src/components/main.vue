<template>
  <section>
    <app-header></app-header>

    <main class="container">
      <div>
        <h1>
          Хиты продаж
        </h1>
      </div>
      <section class="products">
        <div  class="v-for" v-for="product in products" :key="product.id">
          <app-product :product="product"> </app-product>
        </div>
      </section>
    </main>

    <app-footer></app-footer>
  </section>

</template>

<script>
export default {
  name: "main",
    data(){
        return{
            products: []
        }
    },
    created() {
        this.$http.get('/products')
            .then(response => this.products = response.data)
    }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>
