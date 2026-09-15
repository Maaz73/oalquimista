<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-darkpurple box-border">

<header class="fixed top-0 inset-x-0 w-full z-40
               md:px-12
               lg:px-30
               xl:px-52">
    <?php

    include_once "../components/cp_navbar.php";

    ?>
</header>

<div class="bg-pink h-18 sm:h-12"></div>
<svg class="w-full" viewBox="0 0 1920 284" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1920 0C1769.5 169 1537.5 179.5 1336 179.5C1134.5 179.5 840 84 584 84C328 84 67.5 176 0 284V0H1920Z" fill="#A94064"/>
</svg>

<main class="pb-10">
    <div class="px-5
            md:px-12
            lg:px-30
            xl:px-52">
        <div class="font-lily text-neonyellow text-2xl
            md:text-3xl
            lg:text-3xl
            2xl:text-4xl"> Tu tens perguntas? </div>
        <div class="font-poppins text-neonyellow text-md mb-5
                    md:text-lg
                    lg:text-lg
                    xl:text-lg
                    2xl:text-2xl">Nós servimos as respostas!</div>

        <div class="flex flex-col">
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Onde estão os favoritos?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.
                    </p>
                </div>
            </div>
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Quem escolhe as Top Receitas?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        As “Top Receitas” são escolhidas automaticamente por um algoritmo, as receitas mais vistas na ultima semana vão automaticamente para essa secção.
                    </p>
                </div>
            </div>
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Como posso criar uma conta?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        Para criar uma conta, basta tocar no ícone no topo da tela e abaixo do login tocar em “Inscreve-te no alquimista”
                    </p>
                </div>
            </div>
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Têm receitas não alcoólicas?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        As receitas de bebidas não alcóolicas estão no outro lado do website! Basta clicares na logo no topo da página para trocar entre lados.
                    </p>
                </div>
            </div>
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Quando mudam as receitas de época?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        As receitas da época mudam quando aparecer uma época nova, seja uma estação nova ou uma época festiva que esteja a aproximar-se.
                    </p>
                </div>
            </div>
            <div class="dropdown break-inside-avoid mb-4">
                <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream
                            md:text-md
                            lg:text-lg">Como posso contactá-los?</span>
                    <img class="w-6" src="../images/seta_baixo.svg" alt="">
                </button>
                <div class="dropdown-content hidden">
                    <p class="text-cream font-poppins p-2 text-sm
                         md:text-md
                         lg:text-lg">
                        Nossos contactos estão na página do 'Sobre nós'!
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    document.querySelectorAll('.dropdown-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.dropdown').querySelector('.dropdown-content').classList.toggle('hidden');
        })
    })
</script>
<script src="../scripts/build/nav.js"></script>
</body>

<?php include_once "../components/cp_footer.php"?>

</html>