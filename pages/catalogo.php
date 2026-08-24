<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-darkpurple text-neonyellow">
<header class="px-5 py-4 bg-darkerpurple md:px-14">

    <?php include_once "../components/cp_navbar.php"?>

    <form class="my-2">
        <input placeholder="O que vai ser hoje?" class="w-full rounded-xl placeholder:text-neonyellow lg:placeholder:text-lg pl-5 py-1 bg-pink">
    </form>

    <div class="flex items-center mt-4">
        <img src="../images/filtro.svg" class="h-5 lg:h-6">
        <p class="mx-3 px-6 font-bold text-sm lg:text-lg border-2 border-pink rounded-xl">Tempo</p>
    </div>
</header>
<main class="container mx-auto px-5 md:px-10 xl:px-16 my-4">
    <section class="grid grid-cols-12 gap-2">

        <div class="flex relative items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6">
            <div class="bg-pink py-2 pl-2 w-5/6 xl:w-11/12 xl:pl-6 rounded-xl">
                <p class="font-bold text-lg mb-2 lg:text-xl">Aperol Spritz</p>
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
            <img src="../images/aperolSpritz.png" class="absolute right-0" style="height: 8.5rem">
        </div> <!-- Direita (Mobile) -->

        <div class="flex relative justify-end items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6 sm:justify-normal">
            <div class="bg-pink py-2 pr-2 w-5/6 xl:w-11/12 xl:pr-6 rounded-r-xl sm:rounded-l-xl sm:pl-2">
                <p class="font-bold text-lg mb-2 text-right lg:text-xl sm:text-left">Aperol Spritz</p>
                <div class="flex text-[#ffffff]">
                    <div class="flex items-center ml-auto mr-2 sm:ml-2">
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
            <img src="../images/aperolSpritz.png" class="absolute left-0 sm:left-auto sm:right-0" style="height: 8.5rem">
        </div> <!-- Esquerda (Mobile) -->

        <div class="flex relative items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6 sm:justify-end">
            <div class="bg-pink py-2 pl-2 w-5/6 xl:w-11/12 xl:pl-6 rounded-l-xl sm:rounded-r-xl sm:pr-2">
                <p class="font-bold text-lg mb-2 text-left lg:text-xl sm:text-right">Aperol Spritz</p>
                <div class="flex text-[#ffffff] sm:justify-end">
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
            <img src="../images/aperolSpritz.png" class="absolute right-0 sm:right-auto sm:left-0" style="height: 8.5rem">
        </div>

        <div class="flex relative justify-end items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6">
            <div class="bg-pink py-2 pr-2 w-5/6 xl:w-11/12 xl:pr-6 rounded-xl">
                <p class="font-bold text-lg mb-2 text-right lg:text-xl">Aperol Spritz</p>
                <div class="flex text-[#ffffff] justify-end">
                    <div class="flex items-center mr-2">
                        <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                        <p>5</p>
                        <p>min</p>
                    </div>
                    <div class="flex">
                        <img src="../images/dificuldadeNoite.svg" class="w-6 mr-1">
                        <p>fácil</p>
                    </div>
                </div>
            </div>
            <img src="../images/aperolSpritz.png" class="absolute left-0" style="height: 8.5rem">
        </div>

    </section>
</main>

<?php include_once "../components/cp_footer.php"?>

</body>