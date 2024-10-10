<template>
  <div>
    <Slideshow />
    <BookingSection />
    <ContactSection />
  </div>
</template>

<script>
import Slideshow from '../components/Slideshow.vue';
import BookingSection from '../components/BookingSection.vue';

export default {
  components: {
    Slideshow,
    BookingSection,
  },
};
</script>
