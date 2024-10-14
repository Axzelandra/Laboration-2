<template>
  <header>
    <div class="header-content">
      <img src="@/assets/logo.png" alt="Föreningens logotyp" class="logo">
      <nav>
        <ul>
          <li><router-link to="/">Hem</router-link></li>
          <li><router-link to="/about">Om oss</router-link></li>
          <li><router-link to="/booking">Boka Lokal</router-link></li>
          <li><router-link to="/contact">Kontakt</router-link></li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: 'HeaderComponent',
};
</script>

<style scoped>
/* Dina stilar för header */
</style>
