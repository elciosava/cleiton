<script setup>

</script>

<template>
    <div id="container">
        <div class="perfil">
            <div class="foto">

            </div>
            <h2>Sobre mim</h2>
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
    </div>
    <div class="rodape_sobre">
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
* {
    margin: 0;
    padding: 0;
    box-sizing: 0;
}

#container {
    height: calc(100vh - 270px);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    align-content: center;
    background-color: #F7F7F7;
    flex-wrap: wrap;
}
.texto {
    width: 40%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.perfil {
    width: 60%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.foto {
    background-image: url("../assets/imagem/perfil.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    padding: 100px;
}
h2 {
    padding: 20px;
}
p {
    padding: 20px;
    text-align: justify;
    line-height: 1.6;
}
.rodape_sobre {
    height: 270px;
    background-color: #F7F7F7;
    padding: 0 100px 0 100px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.resumos {
    width: 300px;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    border-radius: 15px;
    margin: 0 20px 0 20px;
    background-color: #ffffff;
    box-shadow: 0 0 50px 5px #4a4a4a;
}
</style>