<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>
<body class="bg-darkerpurple text-neonyellow">
<header class="sm:px-5 md:px-12 lg:px-30 xl:px-52 md:pb-11 sm:bg-pink">
    <?php

    include_once "../components/cp_navbar.php";

    ?>
</header>

<div class="relative hidden sm:block ">
    <svg class="w-full absolute lg:h-36" viewBox="0 0 1920 284" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1920 0C1769.5 169 1537.5 179.5 1336 179.5C1134.5 179.5 840 84 584 84C328 84 67.5 176 0 284V0H1920Z" fill="#A94064"/>
    </svg>
</div>

<main class="pt-4 grid-cols-12 gap-2
sm:grid sm:container sm:mx-auto sm:relative sm:mt-20 sm:px-5 md:px-12 lg:px-30 xl:px-52
xl:pt-20">
    <section class="pr-5 relative flex items-center mt-16 col-span-5
    sm:mt-0 sm:flex-col sm:justify-center sm:justify-items-center sm:-top-">
        <img class="size-44 absolute -left-8 rounded-full border-4 border-neonyellow object-cover
         sm:left-auto sm:relative
         md:size-50
         xl:size-72" src="../images/pfpNoite.png">
        <div class="pl-36 sm:pl-0">
            <h1 class="font-bold text-lg border-b-neonyellow pl-3
            sm:pl-0 sm:pt-2 sm:text-center sm:text-2xl
            xl:text-4xl xl:pb-2">Barbs.1012</h1>
            <hr>
            <p class="text-xs text-left my-3 italic pl-3
            sm:pl-0 sm:text-center sm:text-sm
            xl:text-lg">Durante o dia dou tudo para à noite festejar</p>
        </div>
    </section>


    <div class="relative mt-30 sm:hidden">
        <svg class="w-full absolute bottom-0" viewBox="0 0 1920 284" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1920 284H0C103 101 377 84 584 84C791 84 1115.5 179.5 1336 179.5C1556.5 179.5 1789 177 1920 0V284Z" fill="#732253"/>
        </svg>
    </div>
    <section class="px-5  bg-mediumpurple py-6 col-span-7
    sm:bg-darkerpurple sm:mt-0">
        <div class="flex justify-between items-center border-b-neonyellow border-b-1 pb-2">
            <h1 class="uppercase font-bold text-lg
            xl:text-2xl">Listas</h1>
            <img class="size-6
            xl:size-8" src="../images/adicionarAmarelo.svg">
        </div>
        <section class="pt-2 sm:max-h-56
        sm:overflow-y-auto
        xl:max-h-80">
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Favoritos</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>
            <div class="bg-pink rounded-lg mb-2">
                <h2 class="text-center uppercase text-xs py-2 font-semibold
                xl:text-lg">Vistos por último</h2>
            </div>


        </section>
    </section>
</main>

<?php

include_once "../components/cp_footer.php"

?>

<script src="../scripts/build/nav.js"></script>

</body>