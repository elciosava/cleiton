<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = ref({
    name: '',
    email: '',
    message: ''
});

const statusMessage = ref('');

const sendEmail = async () => {
    try {
        const response = await axios.post('http://localhost:5173/src/api/envia_email.php', form.value);
        statusMessage.value = 'E-mail enviado com sucesso!';
    } catch (error) {
        statusMessage.value = 'Erro ao enviar o e-mail. Tente novamente.';
    }
};

</script>

<template>
    <div id="container">
        <div class="endereco">
            <p style="display: flex; align-content: center; justify-content: flex-start;"><span class="material-symbols-outlined" >location_on</span>Avenida Adolfo Konder, 1187</p>
            <p style="margin-left: 24px;">Bairro Traçado</p>
            <p style="margin-left: 24px;">Urubici - SC</p>
        </div>
        <div class="form_contato">
            <h3>Nos envie uma mensagem!</h3>
            <form @submit.prevent="sendEmail">
                <label for="name">Nome:</label>
                <input type="text" id="name" v-model="form.name" required />
                <label for="email">E-mail:</label>
                <input type="email" id="email" v-model="form.email" required />
                <label for="message">Mensagem:</label>
                <textarea id="message" v-model="form.message" required></textarea>
                <button type="submit">Enviar</button>
            </form>
            <p v-if="statusMessage">{{ statusMessage }}</p>
        </div>
    </div>
</template>

<style scoped>
#container {
    height: 100vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    background-color: #FFC700;
}

.form_contato {
    width: 500px;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 0 25px, #010101;
}
.endereco{
    background-color: #010101;
    width: 500px;
    border-radius: 5px;
    box-shadow: 0 0 0 25px, #010101;
    padding: 20px;
}
p{
    padding: 4px;
    color: #ffffff;
    font-size: 1.2rem;
}
h3 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 0.5rem;
}

input,
textarea {
    width: 100%;
    padding: 0.5rem;
}

button {
    width: 120px;
    height: 35px;
    border-radius: 6px;
    border: none;
    font-size: 1.0em;
    background: linear-gradient(to right, #FFC700 50%, #000000 50%);
    background-size: 200% 100%;
    background-position: right;
    color: #ffffff;
    cursor: pointer;
    transition: background-position 0.4s ease, color 0.4s ease;
    font-weight: 300;
}

button:hover {
    background-position: left;
    color: #010101;
}
</style>