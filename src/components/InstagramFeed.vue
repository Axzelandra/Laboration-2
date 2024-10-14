<template>
  <section class="instagram-feed">
    <h2>Följ oss på Instagram</h2>
    <div id="instafeed"></div>
  </section>
</template>

<script>
import Instafeed from 'instafeed.js';

export default {
  mounted() {
    new Instafeed({
      accessToken: 'din-instagram-access-token',
      target: 'instafeed',
      limit: 6,
      template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
      after: function () {
        console.log('Inlägg hämtade!');
      }
    }).run();
  }
};
</script>

<style scoped>
.instagram-feed {
  padding: 30px 20px;
  background-color: #f4f4f4;
  margin: 20px 0;
  border-radius: 8px;
}

h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

#instafeed {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}

#instafeed a {
  width: 100px;
  height: 100px;
}

#instafeed img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
}
</style>
