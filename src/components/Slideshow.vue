<template>
  <div class="slideshow-container">
    <div v-for="(slide, index) in slides" :key="index" class="slides" v-show="currentSlide === index">
      <img :src="slide" style="width: 100%" />
    </div>

    <!-- Boka nu knapp -->
    <div class="centered">
      <a href="#bokning" class="btn">Boka Nu</a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slides: [
        'bild1.jpg',
        'bild2.jpg',
        'bild3.jpg'
      ],
      currentSlide: 0
    };
  },
  mounted() {
    this.startSlideshow();
  },
  methods: {
    startSlideshow() {
      setInterval(() => {
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
      }, 5000); // Byt bild varje 5 sekunder
    }
  }
};
</script>

<style scoped>
.slideshow-container {
  position: relative;
  max-width: 100%;
}

.slides {
  display: none;
}

.slides img {
  width: 100%;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.btn {
  background-color: #f04;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}
</style>
