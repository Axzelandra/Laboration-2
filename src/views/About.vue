<template>
  <div class="about-container">
    <!-- Sektion för information om föreningen -->
    <section class="about-us">
      <h2>Om Föreningen</h2>
      <p>
        Vi är en förening som arbetar för att främja gemenskap och aktiviteter i vårt lokalsamhälle, med ett fokus på både människor och katter.
      </p>
    </section>

    <!-- Sektion för styrelsemedlemmarna -->
    <section class="board-members">
      <h2>Styrelsen</h2>
      <div class="member" v-for="(member, index) in boardMembers" :key="index">
       // <img :src="member.image" :alt="`Bild på ${member.name}`" class="member-image" />
        <div class="member-info">
          <h3>{{ member.name }}</h3>
          <p><strong>Roll:</strong> {{ member.role }}</p>
          <p>{{ member.description }}</p>
        </div>
      </div>
    </section>

    <!-- Sektion för verksamhetsplan -->
    <section class="activity-plan">
      <h2>Verksamhetsplan</h2>
      <p>
        För att se vår fullständiga verksamhetsplan, klicka på länken nedan för att ladda ner PDF-filen.
      </p>
      <a href="/path/to/verksamhetsplan.pdf" class="download-link" download>
        Ladda ner verksamhetsplanen
      </a>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Exempel på data för styrelsemedlemmar (katter med roliga namn)
      boardMembers: [
        {
          name: "Sir Whiskers",
          role: "Ordförande",
          description: "Ledare med många års erfarenhet av att jaga möss och hålla möten.",
          image: require("@/assets/sir-whiskers.jpg") // Byt ut med faktiska bilder
        },
        {
          name: "Miss Purrington",
          role: "Kassör",
          description: "Noggrann och effektiv med föreningens ekonomi, älskar att sova på tangentbord.",
          image: require("@/assets/miss-purrington.jpg")
        },
        {
          name: "Mr. Fluffy",
          role: "Sekreterare",
          description: "Expert på att skriva mötesprotokoll, när han inte ligger och myser i solen.",
          image: require("@/assets/mr-fluffy.jpg")
        },
        {
          name: "Duchess Meowington",
          role: "Vice Ordförande",
          description: "Har en elegant närvaro och ser till att allt går enligt plan med stil.",
          image: require("@/assets/duchess-meowington.jpg")
        }
      ]
    };
  }
};
</script>

<style scoped>
.about-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

section {
  margin-bottom: 40px;
}

h2 {
  color: #333;
  margin-bottom: 10px;
}

p {
  line-height: 1.6;
}

.board-members {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.member {
  display: flex;
  align-items: center;
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.member-image {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 20px;
}

.member-info {
  max-width: 600px;
}

.download-link {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

.download-link:hover {
  background-color: #0056b3;
}
</style>
