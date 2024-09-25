<script setup>
import { RouterLink, RouterView } from 'vue-router'
import MenuComponente from './components/menu_componente.vue'
</script>

<template>
  <MenuComponente />
  <RouterView />
</template>

<style scoped>
  *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto';
  }
</style>
