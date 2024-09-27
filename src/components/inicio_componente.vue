<script setup>

</script>

<template>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    <div class="rodape_inicio">
        <div class="resumos">
            <span class="material-symbols-outlined" style="font-size: 3em; color: #FFC700; ">directions_car</span>
            <h1>1</h1>
            <span>Veiculos confortaveis</span>
        </div>
        <div class="resumos">
            <span class="material-symbols-outlined" style="font-size: 3em; color: #FFC700; ">person</span>
            <h1>1</h1>
            <span>Excelente motorista</span>
        </div>
        <div class="resumos">
            <span class="material-symbols-outlined" style="font-size: 3em; color: #FFC700; ">paid</span>
            <h1>12</h1>
            <span>Melhores preços</span>
        </div>
        <div class="resumos">
            <span class="material-symbols-outlined" style="font-size: 3em; color: #FFC700; ">flag</span>
            <h1>565</h1>
            <span>Clientes atendidos</span>
        </div>
    </div>
</template>

<style scoped>
    #container{
        background-image: url("../assets/imagem/fundo_inicio.jpg");
        height: calc(100vh - 200px);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        padding-bottom: 100px;
        padding-top: 50px;
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
    button:hover {
        background-position: left; 
        color: #010101;
    } 
    .rodape_inicio{
        height: 270px;
        background-color: #ffffff;
        padding: 0 100px 0 100px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        align-content: center;
    }
    p{
        margin-top: 2px;
        margin-bottom: 2px;
    }
    .resumos{
        width: 240px;
        height: 175px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
    }
</style>