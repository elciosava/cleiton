<script setup>

</script>

<template>
    <div id="container">        
        <div class="logo">
            <img src="../assets/logo/Logo.svg" alt="">
        </div>            
        <div class="whatsapp">
            <span>Solicite um Taxi: </span><a href="https://api.whatsapp.com/send/?phone=5542999388022" target="_blank">(42) 9 9938 8022</a>
        </div>
        <div class="menu">
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
        height: 90px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        background-color: rgb(226, 226, 202);
    }
    .logo{
        margin: 0 0 0 15px;
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
    }
</style>
