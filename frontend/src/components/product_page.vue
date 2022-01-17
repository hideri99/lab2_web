<template>
  <section>
    <app-header></app-header>
    <main class="container">
      <div class="product-title">
        <h1>{{product.title}}</h1>
      </div>

      <div class="info">
        <div class="product-image">
          <img :src= product.img alt="">
        </div>

        <div class="product-description">
          <div class="manufacturer">
            Производитель: {{product.manufacturer}}
          </div>

          <div class="buying">
            <div class="buying-price">
              <div>Цена:</div>
              <div class="buying-pricenew-val">
                {{product.price}} ₽
              </div>
            </div>
            <a href="#" class="btn"><span class="text">Добавить в корзину</span></a>

          </div>
        </div>

        <div class="product-about">
          <h4>Инормация о товаре</h4>
          <div>
            {{product.description}}
          </div>
        </div>
      </div>


    </main>
    <app-footer></app-footer>
  </section>

</template>

<script>
import product from "@/components/product";

export default {
  name: "product_page",
  props: {
    product: product,
    id: String
  },

  created() {
    this.id = this.$route.params.id
    this.product = this.$route.params.product
  }
}
</script>

<style scoped src="../assets/styles/product_page_style.css">

</style>