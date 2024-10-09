<template>
  <div>
    <h1>Skapa en Bokning</h1>
    
    <!-- Bokningsformulär -->
    <form @submit.prevent="createBooking">
      <div>
        <label for="name">Namn:</label>
        <input type="text" id="name" v-model="booking.name" required />
      </div>
      <div>
        <label for="email">E-post:</label>
        <input type="email" id="email" v-model="booking.email" required />
      </div>
      <div>
        <label for="date">Datum:</label>
        <input type="date" id="date" v-model="booking.date" required />
      </div>
      <button type="submit">Skapa Bokning</button>
    </form>

    <h2>Bokningar</h2>
    <ul>
      <li v-for="(booking, index) in bookings" :key="index">
        {{ booking.name }} - {{ booking.email }} - {{ booking.date }}
      </li>
    </ul>
  </div>
</template>

<script>
import { api } from '../api';

export default {
  data() {
    return {
      booking: {
        name: '',
        email: '',
        date: '',
      },
      bookings: [],
    };
  },
  methods: {
    // Skapa en ny bokning
    async createBooking() {
      try {
        const response = await api.post('bookings', this.booking);
        this.bookings.push(response.data);  // Lägg till den nya bokningen i listan
        this.booking = { name: '', email: '', date: '' };  // Rensa formuläret
        alert('Bokningen skapades!');
      } catch (error) {
        console.error('Det gick inte att skapa bokningen:', error);
        alert('Något gick fel!');
      }
    },

    // Hämta alla bokningar
    async fetchBookings() {
      try {
        const response = await api.get('bookings');
        this.bookings = response.data;
      } catch (error) {
        console.error('Det gick inte att hämta bokningar:', error);
      }
    },
  },
  mounted() {
    this.fetchBookings();  // Hämta bokningar när sidan laddas
  }
};
</script>
