import axios from 'axios';

const api = axios.create({
  baseURL: 'http://localhost:8000', // Ton API backend Laravel
});

export default api;
