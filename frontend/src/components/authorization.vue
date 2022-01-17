<template>
  <body>
  <div class="login-box">
    <div class="row">
      <img
          src="../assets/images/auto.png" alt="auto"
      />
    </div>
    <h2>Авторизация</h2>
    <form>
      <div class="user-box">
        <input type="text" name="" required=""/>
        <label><i class="Username"></i>
          Почта или логин
        </label>
      </div>
      <div class="user-box">
        <input type="password" name="" required=""/>
        <label><i class="Unlock"></i>
          Пароль
        </label>
      </div>
    </form>
    <router-link :to="{name: 'main'}">
      <button type="submit" class = "submit-button">Вход</button>
    </router-link>
  </div>

  </body>
</template>

<script>
export default {
  name: "authorization"
}
</script>

<style scoped src="../assets/styles/authorization_style.css">

</style>