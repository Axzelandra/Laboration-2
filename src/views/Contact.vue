<template>
  <div class="contact-container">
    <!-- Sektion för kontaktuppgifter -->
    <section class="contact-info">
      <h2>Kontaktuppgifter</h2>
      <p><strong>E-post:</strong> foreningen@example.com</p>
      <p><strong>Telefon:</strong> +123 456 7890</p>
      <p><strong>Adress:</strong> Föreningens gata 1, 123 45 Staden</p>
    </section>

    <!-- Sektion för kontaktformulär -->
    <section class="contact-form">
      <h2>Kontakta oss</h2>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="name">Namn:</label>
          <input type="text" v-model="formData.name" id="name" required />
        </div>

        <div class="form-group">
          <label for="email">E-post:</label>
          <input type="email" v-model="formData.email" id="email" required />
        </div>

        <div class="form-group">
          <label for="message">Meddelande:</label>
          <textarea v-model="formData.message" id="message" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Skicka</button>
      </form>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        message: ''
      }
    };
  },
  methods: {
    submitForm() {
      // Simpel hantering av formulärdata
      console.log('Formulärdata:', this.formData);
      alert('Tack för ditt meddelande! Vi hör av oss snart.');
      // Här skulle du kunna skicka datan till backend (Laravel API)
      
      // Nollställer formuläret efter inskickat meddelande
      this.formData.name = '';
      this.formData.email = '';
      this.formData.message = '';
    }
  }
};
</script>

<style scoped>
.contact-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h2 {
  color: #333;
  margin-bottom: 20px;
}

p {
  line-height: 1.6;
}

.contact-info {
  margin-bottom: 40px;
}

.contact-form .form-group {
  margin-bottom: 20px;
}

.contact-form label {
  display: block;
  margin-bottom: 5px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 16px;
}

.contact-form textarea {
  resize: vertical;
}

.submit-btn {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.submit-btn:hover {
  background-color: #0056b3;
}
</style>
