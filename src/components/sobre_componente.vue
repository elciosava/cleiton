<script setup>

</script>

<template>
    <div id="container">
        <div class="texto">
            <div class="perfil">

            </div>
            <p>Olá, meu nome é Cleiton! Sou natural de Urubici, uma cidade que conheço como a palma da minha mão. 
                Ao longo dos anos, me especializei em oferecer serviços de turismo pela belíssima Serra Catarinense, 
                proporcionando experiências únicas para quem deseja explorar essa região incrível.
                Além disso, ofereço serviços de transfer em todo o território nacional, sempre com segurança 
                e conforto. Tenho um Virtus Exclusive 2025, que garante uma viagem agradável e tranquila, seja 
                para passeios turísticos ou transfers executivos.
                Trabalho como taxista há 7 anos, com atendimento disponível das 7:00 até 00:00, garantindo 
                mobilidade com agilidade e qualidade. No turismo, atendo em horário comercial, e também tenho 
                experiência como guia turístico registrado, oferecendo serviços especializados para quem quer 
                conhecer o melhor da Serra Catarinense.<br><br>
                Conte comigo para fazer da sua viagem uma experiência inesquecível!</p>
        </div>
        <div class="imagem">

        </div>
    </div>
</template>

<style scoped>
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
        background-color: #F7F7F7;
        flex-wrap: wrap;
    }
    .imagem{
        width: 50%;
        height: 100vh;
        background-image: url("../assets/imagem/carro_cleiton.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .perfil{
        background-image: url("../assets/imagem/perfil.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 50%;
        width: 200px;
        height: 200px;
        padding: 100px;
    }
    .texto{
        width: 50%;
        height: calc(100vh - 300px);
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        align-content: center;
    }
    p{
        padding: 20px;
        text-align: justify;
        line-height: 1.6;
    }
</style>