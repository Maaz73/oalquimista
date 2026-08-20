<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>
<body class="bg-darkerpurple text-neonyellow">
    <header class="px-5 py-4">
        <?php include_once "../components/cp_navbar.php"?>
    </header>
    <main class="md:grid grid-cols-12 gap-2 lg:gap-6 md:container mx-auto md:px-10 xl:px-16 mt-4">
        <section class="px-5 py-4 md:bg-darkpurple col-span-5 md:rounded-4xl lg:px-10 lg:py-6">
            <div class="flex justify-between">
                <img src="../images/adicionarAmarelo.svg">
                <img src="../images/favoritoAmarelo.svg">
            </div>
            <div class="relative">
                <img src="../images/molduraAmarelo.svg" class="mx-auto">
                <img src="../images/aperolSpritzReceita.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/3" style="height: 14rem">
            </div>

            <div>
                <div class="flex justify-center items-center mt-12 mb-2">
                    <h1 class="text-2xl font-bold uppercase tracking-wide mr-2">Aperol Spritz</h1>
                    <img class="h-10" src="../images/infoAmarelo.svg">
                </div>

                <div class="flex items-center justify-center mb-4 lg:mb-0">
                    <div class="flex items-center text-[#fff] uppercase mr-6">
                        <img src="../images/tempoNoite.svg" class="fill-neonyellow pr-2">
                        <p class="pr-1">5</p>
                        <p>Min</p>
                    </div>
                    <div class="flex items-center text-[#fff] uppercase mr-6">
                        <img src="../images/dificuldadeNoite.svg" class="fill-neonyellow pr-2">
                        <p>Fácil</p>
                    </div>
                    <div class="flex items-center text-[#fff] uppercase mr-6">
                        <p class="text-neonyellow  text-2xl pr-2">%</p>
                        <p>15,0</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-pink w-full px-5 pt-4 pb-6 rounded-t-4xl col-span-7 md:rounded-b-4xl lg:px-10 lg:py-6">
            <h2 class="text-2xl text-center font-medium uppercase my-2 lg:text-3xl lg:mt-0">Ingredientes</h2>
            <ol class="mt-4">
                <li class="flex items-center mt-2">
                    <div class="relative pr-2">
                        <input type="checkbox" id="ingrediente" class="hidden peer">
                        <label for="ingrediente" class="block border-2 border-[#fff] h-6 w-6 md:cursor-pointer rounded-md"></label>
                        <img src="../images/checked.svg" class="h-6 w-6 absolute top-0 left-0 hidden peer-checked:block pointer-events-none">
                    </div>
                    <div class="flex justify-between w-full text-[#fff] text-lg lg:text-xl">
                        <p>Prosecco</p>
                        <p>135 mL</p>
                    </div>
                </li>
                <li class="flex items-center mt-2">
                    <div class="relative pr-2">
                        <input type="checkbox" id="ingrediente2" class="hidden peer">
                        <label for="ingrediente2" class="block border-2 border-[#fff] h-6 w-6 md:cursor-pointer rounded-md"></label>
                        <img src="../images/checked.svg" class="h-6 w-6 absolute top-0 left-0 hidden peer-checked:block pointer-events-none">
                    </div>
                    <div class="flex justify-between w-full text-[#fff] text-lg lg:text-xl">
                        <p>Prosecco</p>
                        <p>135 mL</p>
                    </div>
                </li>
                <li class="flex items-center mt-2">
                    <div class="relative pr-2">
                        <input type="checkbox" id="ingrediente3" class="hidden peer">
                        <label for="ingrediente3" class="block border-2 border-[#fff] h-6 w-6 md:cursor-pointer rounded-md"></label>
                        <img src="../images/checked.svg" class="h-6 w-6 absolute top-0 left-0 hidden peer-checked:block pointer-events-none">
                    </div>
                    <div class="flex justify-between w-full text-[#fff] text-lg lg:text-xl">
                        <p>Prosecco</p>
                        <p>135 mL</p>
                    </div>
                </li>
                <li class="flex items-center mt-2">
                    <div class="relative pr-2">
                        <input type="checkbox" id="ingrediente4" class="hidden peer">
                        <label for="ingrediente4" class="block border-2 border-[#fff] h-6 w-6 md:cursor-pointer rounded-md"></label>
                        <img src="../images/checked.svg" class="h-6 w-6 absolute top-0 left-0 hidden peer-checked:block pointer-events-none">
                    </div>
                    <div class="flex justify-between w-full text-[#fff] text-lg lg:text-xl">
                        <p>Prosecco</p>
                        <p>135 mL</p>
                    </div>
                </li>
            </ol>
        </div>
        <div class="bg-pink w-full px-5 pb-12 col-span-12  md:rounded-4xl lg:px-10 lg:py-8">
            <h2 class="text-2xl text-center font-medium uppercase pt-6 pb-6 lg:pt-0 lg:text-3xl">Modo de preparação</h2>
            <div class="flex">
                <ol class="list-decimal list-outside text-[#fff] ml-5 text-justify text-md lg:text-xl">
                    <li class="mb-2">Encha um copo largo com gelo</li>
                    <li class="mb-2">Encha um copo largo com gelo</li>
                    <li class="mb-2">Encha um copo largo com gelo</li>
                </ol>
            </div>
        </div>
    </main>

    <?php

    include("../components/cp_footer.php");

    ?>

</body>

</html>
