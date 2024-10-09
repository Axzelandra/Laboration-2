// src/api.js
import axios from 'axios';

export const api = axios.create({
    baseURL: 'http://localhost:8000/api/', // URL för backend
    headers: {
        'Content-Type': 'application/json',
    }
});

