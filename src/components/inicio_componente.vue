<script setup>

</script>

<template>
    <div id="container">
        <div class="texto_amarelo">
            <p>PRECISA DE UMA CARONA?</p>
        </div>
        <div class="texto_branco">
            <p>O MELHOR SERVIÇO DE TAXI</p>
            <p>E TURISMO DE URUBICI </p>
            <p>VOCÊ ENCONTRA AQUI!</p>
        </div>
        <div class="botao">
            <button>CONTRATE AGORA</button>
        </div>
    </div>
</template>

<style scoped>
    #container{
        background-image: url("../assets/imagem/fundo_inicio.jpg");
        height: calc(100vh - 90px);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        align-content: center;
    }
    .texto_amarelo{
        color: #FFC700;
        font-size: 3.2em;
        width: 650px;
        text-align: center;
    }
    .texto_branco{
        color: #ffffff;
        font-size: 3em;
        width: 650px;
        text-align: center;
    }
    button {
        width: 222px;
        height: 56px;
        margin: 50px 0 0 0;
        border-radius: 6px;
        border: none;
        font-size: 1.2em;
        background: linear-gradient(to right, #ffffff 50%, #FFC700 50%);
        background-size: 200% 100%;
        background-position: right; 
        color: #ffffff;
        cursor: pointer;
        transition: background-position 0.4s ease, color 0.4s ease;
    }
    p{
        margin-top: 2px;
        margin-bottom: 2px;
    }
    button:hover {
        background-position: left; 
        color: #010101;
    }
</style>