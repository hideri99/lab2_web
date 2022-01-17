<template>
  <section class="product-item">
    <div>
      <img :src=product.img alt="">
    </div>
    <h4>
      <div class="title'">
        <router-link :to="{name: 'product_page', params: {product: product, id: product.id}}">
          {{ product.title }}
        </router-link>
      </div>
    </h4>
    <p>
      {{product.description}}
    </p>
    <div>
        <span class="price">{{product.price}} ₽
        </span>
    </div>
  </section>
</template>

<script>
export default {
  name: "product",
  props: ['product']
}
</script>

<style scoped src="../assets/styles/product_style.css">

</style>