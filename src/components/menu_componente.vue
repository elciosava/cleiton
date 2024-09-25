<script setup>

</script>

<template>
    <div id="container">
        <div class="menu">
            <img src="../assets/logo/Logo.svg" alt="">
            <div class="whatsapp"><span>Solicite um Taxi: </span><a href="https://api.whatsapp.com/send/?phone=5542999388022" target="_blank">(42) 9 9938 8022</a></div>            
            <nav>
                <ul>
                    <li>Inicio</li>
                    <li>Sobre nós</li>
                    <li>Turismo</li>
                    <li>Galeria</li>
                    <li>Contato</li>
                </ul>
            </nav>
        </div>
    </div>
    
</template>

<style scoped>
    #container{
        width: 100%;
        height: 80px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-evenly;
        align-items: center;
    }
    .menu{
        width: 100%;
        height: 80px;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }
    ul{
        width: 100%;
        display: flex;
    }
    li{
        width: 100px;
        list-style: none;
    }
</style>
