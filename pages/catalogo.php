<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-darkpurple text-neonyellow container">
    <header class="px-5 py-4 bg-darkerpurple">

        <?php include_once "../components/cp_navbar.php"?>

        <form class="my-2">
            <input placeholder="O que vai ser hoje?" class="w-full rounded-xl placeholder:text-neonyellow pl-5 py-1 bg-pink">
        </form>

        <div class="flex items-center mt-4">
            <img src="../images/filtro.svg" class="h-5">
            <p class="mx-3 px-6 font-bold text-sm border-2 border-pink rounded-xl">Tempo</p>
        </div>
    </header>
    <main class="px-5 my-4">
        <section>
            <div class="flex items-center mt-10">
                <div class="bg-pink py-2 pl-2 w-5/6 rounded-l-xl">
                    <p class="font-bold text-lg mb-2">Aperol Spritz</p>
                    <div class="flex text-[#ffffff]">
                        <div class="flex items-center mr-2">
                            <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                            <p>5</p>
                            <p>min</p>
                        </div>
                        <div class="flex">
                            <img src="../images/dificuldadeNoite.svg"class="w-6 mr-1">
                            <p>fácil</p>
                        </div>
                    </div>
                </div>
                <img src="../images/aperolSpritz.png" class="absolute right-5" style="height: 8.5rem">
            </div> <!-- Direita (Mobile) -->

            <div class="flex items-center justify-end mt-10">
                <div class="bg-pink py-2 pr-2 w-5/6 rounded-r-xl">
                    <p class="font-bold text-lg mb-2 text-right">Aperol Spritz</p>
                    <div class="flex text-[#ffffff]">
                        <div class="flex items-center ml-auto mr-2">
                            <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                            <p>5</p>
                            <p>min</p>
                        </div>
                        <div class="flex">
                            <img src="../images/dificuldadeNoite.svg"class="w-6 mr-1">
                            <p>fácil</p>
                        </div>
                    </div>
                </div>
                <img src="../images/aperolSpritz.png" class="absolute left-5" style="height: 8.5rem">
            </div> <!-- Esquerda (Mobile) -->
        </section>
    </main>

    <footer class="bg-[#200322] border-t-2 border-dashed mt-10 py-6">
        <div class="border-b-1 ">
            <img  src="../images/logoCompleta.svg" class="mx-auto w-16">
            <div class="flex justify-center my-6">
                <img src="../images/instaAmarelo.svg" class="px-3">
                <img src="../images/tiktokAmarelo.svg" class="px-3">
                <img src="../images/pinterestAmarelo.svg" class="px-3">
            </div>
        </div>

        <div class="text-center my-6">
            <p class="pb-6">Contacte-nos</p>
            <p class="pb-6">Perguntas Frequentes</p>
            <p class="pb-6">Sobre Nós</p>
            <p>Voltar ao Topo</p>
        </div>

        <div class="text-xs font-extralight text-center" style="">
            <p>© 2024-2026 O Alquimista. All rights reserved.</p>
            <p>Gabriel Azevedo | Graziella Custódio | Nicole Santos</p>
        </div>

    </footer>
</body>