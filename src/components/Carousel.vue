<template>
    <div class="carousel">
      <div
        class="carousel-track"
        :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
      >
        <div v-for="(slide, index) in slides" :key="index" class="carousel-slide">
          <img :src="slide" :alt="'Slide ' + (index + 1)" />
        </div>
      </div>
      <button class="carousel-control prev" @click="prevSlide">‹</button>
      <button class="carousel-control next" @click="nextSlide">›</button>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  // Define a prop chamada slides, para as imagens do carrossel
  const props = defineProps({
    slides: {
      type: Array,
      required: true
    }
  });
  
  // Controle de estado do slide atual
  const currentSlide = ref(0);
  
  // Função para avançar o slide
  function nextSlide() {
    currentSlide.value = (currentSlide.value + 1) % props.slides.length;
  }
  
  // Função para voltar o slide
  function prevSlide() {
    currentSlide.value = (currentSlide.value - 1 + props.slides.length) % props.slides.length;
  }
  </script>
  
  <style scoped>
  .carousel {
    position: relative;
    overflow: hidden;
    width: 90%;
    max-width: auto;
    max-height: 400px;
    border-radius: 8px;
    margin: auto;
  }
  
  .carousel-track {
    display: flex;
    transition: transform 0.5s ease;
  }
  
  .carousel-slide {
    min-width: 100%;
    box-sizing: border-box;
  }
  
  .carousel-slide img {
    width: 100%;
    height: auto;
    display: block;
  }
  
  .carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0);
    color: white;
    border: none;
    font-size: 3rem;
    padding: 0.5rem;
    cursor: pointer;
    z-index: 10;
  }
  
  .carousel-control.prev {
    left: 10px;
  }
  
  .carousel-control.next {
    right: 10px;
  }
  </style>
  