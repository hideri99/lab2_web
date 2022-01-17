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
              <a @click = "addToCart(product)" class="btn"><span class="text">Добавить в корзину</span></a>

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

export default {
  name: "product_page",
    methods: {
        addToCart(product){
            const params = {
                id: product.id, count: 1, userId: localStorage.userId
            }
            this.$http.post('/cart', params)
        }
    },
    data() {
        return {
            product: null
        }
    },
    created() {
        const id = this.$route.params.id
        this.$http.get('/products/' + id)
            .then(response => this.product = response.data)
    }
}
</script>

<style scoped src="../assets/styles/product_page_style.css">

</style>
