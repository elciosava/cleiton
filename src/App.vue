<script setup>
import { RouterLink, RouterView } from 'vue-router';
import MenuComponente from './components/menu_componente.vue';
import InicioComponente from './components/inicio_componente.vue';
import SobreComponente from './components/sobre_componente.vue';
import TurismoComponente from './components/turismo_componente.vue';
import ContatoComponente from './components/contato_componente.vue';
import Guiaturistico_componente from './components/guiaturistico_componente.vue';

</script>

<template>
  <MenuComponente />
  <InicioComponente />
  <SobreComponente />
  <TurismoComponente />
  <Guiaturistico_componente />
  <ContatoComponente />
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
  ::-webkit-scrollbar {
    width: 1px; /* largura da barra de rolagem */
  }
</style>
