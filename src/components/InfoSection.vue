<template>
  <section class="info-section">
    <h2>Nyheter</h2>
    <div class="news-container">
      <div class="news-item" v-for="(item, index) in newsItems" :key="index">
        <h3>{{ item.title }}</h3>
        <p>{{ item.description }}</p>
        <a :href="item.link" class="read-more">Läs mer</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      newsItems: [
        {
          title: "Kommande evenemang",
          description: "Här hittar du information om våra kommande evenemang och aktiviteter.",
          link: "/kommande-evenemang"
        },
        {
          title: "Ny styrelse valdes",
          description: "Vi har valt en ny styrelse för året! Läs om våra nya medlemmar.",
          link: "/ny-styrelse"
        }
      ]
    };
  }
};
</script>

<style scoped>
.info-section {
  background-color: #f4f4f4;
  padding: 30px 20px;
  margin: 20px 0;
  border-radius: 8px;
}

h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

.news-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.news-item {
  background-color: #fff;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.news-item h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.read-more {
  color: #007bff;
  text-decoration: none;
}

.read-more:hover {
  text-decoration: underline;
}
</style>
