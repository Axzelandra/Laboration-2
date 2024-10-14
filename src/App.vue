<template>
  <div id="app">
    <HeaderComponent />
    <router-view /> <!-- Detta visar den aktuella route-komponenten -->
    <FooterComponent />
  </div>
</template>

<script>
import HeaderComponent from './components/Header.vue';
import FooterComponent from './components/Footer.vue';
import Footer from './components/Footer.vue';

export default {
  components: {
        HeaderComponent,
        FooterComponent
  },
};
</script>

<style>
/* Grundläggande reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #be0707d2;
    color: white;
    padding: 10px 0;
    text-align: center;
}

.logo {
    width: 150px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px 0;
  width: 100%;
}
</style>
