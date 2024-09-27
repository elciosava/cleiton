<script setup>
import { RouterLink, RouterView } from 'vue-router'
import MenuComponente from './components/menu_componente.vue'
import inicioComponente from './components/inicioComponente.vue';

</script>

<template>
  <MenuComponente />
  <inicioComponente />
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
