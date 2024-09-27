<script setup>

</script>

<template>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div id="cabecalho"></div>
    <div id="container">        
        <div class="logo">
            <img src="../assets/logo/Logo.svg" alt="">
        </div>            
        <div class="whatsapp">
            <span class="material-symbols-outlined" style="color: #FFC700; font-size: 2em;">phone_android</span><span style="font-size: 1.3em;">Solicitar um motorista: </span><a style="font-size: 1.3em;" href="https://api.whatsapp.com/send/?phone=554999930655" target="_blank">(49) 9 9993 0655</a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li>INÍCIO</li>
                    <li>SOBRE</li>
                    <li>TURISMO</li>
                    <li>GALERIA</li>
                    <li>CONTATO</li>
                </ul>
            </nav>    
        </div>            
    </div>
</template>

<style scoped>
    #cabecalho{
        background-color: #FFC700;
        height: 20px;
        width: 100%;
    }
    #container{
        width: 100%;
        height: 90px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        background-color: #f7f7f7;
    }
    .logo{
        margin: 0 0 0 25px;
    }
    .whatsapp{
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: nowrap;
        flex-direction: row;
        padding: 5px;
    }
    span{
        margin-left: 4px;
        margin-right: 4px;
        cursor: pointer;
    }
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: #FFC700;     
        cursor: pointer;
    }
    ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
    }
    li {
        padding: 0 20px 0 20px;
        margin: 0 20px 0 20px;
        list-style: none;
        cursor: pointer;
        position: relative;
    }
    li::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #FFC700;
        transition: width 0.3s ease;
    }
    li:hover::after {
        width: 100%;
    }
</style>
