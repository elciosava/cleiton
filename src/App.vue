<script setup>
import { RouterLink, RouterView } from 'vue-router'
import MenuComponente from './components/menu_componente.vue'
import InicioComponente from './components/inicio_componente.vue';
import SobreComponente from './components/sobre_componente.vue';

</script>

<template>
  <MenuComponente />
  <InicioComponente />
  <SobreComponente />
  <RouterView />
  <RouterLink />
</template>

<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto';
  }
</style>
