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
        const response = await axios.post('https://localhost:5173/src/api/envia_email.php', form.value);
        statusMessage.value = 'E-mail enviado com sucesso!';
    } catch (error) {
        statusMessage.value = 'Erro ao enviar o e-mail. Tente novamente.';
    }
};

</script>

<template>
    <div id="container">
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
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
}
.form_contato{
    width: 60%;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    background-color: red;
}
form div {
    width: 100%;
    margin: 1rem 0 1rem 0;
}
h3{
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