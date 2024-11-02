<script setup>

</script>

<template>
    <div id="container">
        <div class="form_contato">
        <form @submit.prevent="sendEmail">
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" v-model="form.name" required />
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" v-model="form.email" required />
        </div>
        <div>
            <label for="message">Mensagem:</label>
            <textarea id="message" v-model="form.message" required></textarea>
        </div>
            <button type="submit">Enviar</button>
        </form>
            <p v-if="statusMessage">{{ statusMessage }}</p>
        </div>
    </div>
</template>

<style scoped>
    #container{
        width: 100vw;
        height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        padding-bottom: 100px;
        padding-top: 50px;
    }
</style>