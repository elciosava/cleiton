<script setup>
import Carousel from '@/components/Carousel.vue';
  import { ref } from 'vue';
  
  // Definindo as imagens do carrossel
  const slides = ref([
    'https://turismo.uai.com.br/wp-content/uploads/2024/05/unnamed-2024-05-28T094117.984.jpg',
    'https://static.ndmais.com.br/2022/12/06072022-dji-0026-scaled.jpg',
    'https://visiteaserrasc.com.br/painel/img/vserrasc_site/6_cidades_14253.jpg'
  ]);
</script>

<template>
    <div id="container">
        <div class="carrocel">
            <div class="carousel-container">
      <Carousel :slides="slides" />
    </div>
        </div>    
        <div class="texto">
            <h2>Descubra os Encantos de Urubici, SC: Os Melhores Pontos Turísticos</h2>
            <p>Urubici, situada no coração da Serra Catarinense, é um dos destinos mais belos e visitados de Santa Catarina, 
            conhecido por sua natureza exuberante, clima agradável e paisagens de tirar o fôlego. Seja você um amante de 
            aventuras, ecoturismo ou apenas deseja relaxar em meio à natureza, Urubici oferece atrações que certamente 
            vão te encantar. A seguir, conheça alguns dos principais pontos turísticos da cidade:</p>
        </div>
    </div>
</template>

<style scoped>
  .carousel-container {
    padding: 2rem;
  }

    *{
        margin: 0;
        padding: 0;
        box-sizing: 0;
    }
    #container{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: row;
        align-content: center;
        background-color: #f7f7f7;
        flex-wrap: wrap;
    }
    .texto{
        width: 50%;
        height: 100vh;
    }
    .carrocel{
        width: 50%;
        height: 100vh;
    }
    h2{
        padding: 20px;
    }
    p{
        padding: 20px;
        text-align: justify;
        line-height: 1.6;
    }
</style>