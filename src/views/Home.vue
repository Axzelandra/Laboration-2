<template>
  <div>
    <Slideshow />
    <InfoSection />
    <InstagramFeed />
  </div>
</template>

<script>
import Slideshow from '../components/Slideshow.vue';
import InfoSection from '../components/InfoSection.vue';
import InstagramFeed from '../components/InstagramFeed.vue';

export default {
  components: {
    Slideshow,
    InfoSection,
    InstagramFeed,
  },
};
</script>
