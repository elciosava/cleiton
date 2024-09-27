<script setup>

</script>

<template>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div id="container">        
        <div class="logo">
            <img src="../assets/logo/Logo.svg" alt="">
        </div>            
        <div class="whatsapp">
            <span class="material-symbols-outlined" style="color: #FFC700;">phone_android</span><span>Solicitar um motorista: </span><a href="https://api.whatsapp.com/send/?phone=5542999388022" target="_blank">(42) 9 9938 8022</a>
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
        margin: 0 0 0 15px;
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
    ul{
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
    }
    li{
        width: 120px;
        padding: 5px;
        list-style: none;
        cursor: pointer;
    }
    li:hover{
        width: 120px;
        padding: 5px;
        list-style: none;
        color: #FFC700;
        cursor: pointer;
    }
</style>
