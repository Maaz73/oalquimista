<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-darkpurple box-border">

<div class="relative bg-pink pt-14 mb-18
            sm:mb-26
            lg:mb-36 lg:pt-10">
    <svg class="absolute w-full" viewBox="0 0 1920 284" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1920 0C1769.5 169 1537.5 179.5 1336 179.5C1134.5 179.5 840 84 584 84C328 84 67.5 176 0 284V0H1920Z" fill="#A94064"/>
    </svg>
</div>

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

    <div class="columns-1 mb-14
                md:columns-2 md:mb-32
                xl:columns-3">
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
        <div class="dropdown break-inside-avoid mb-4">
            <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">Onde estão os favoritos?</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">
                    Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas.</p>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.dropdown-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.dropdown').querySelector('.dropdown-content').classList.toggle('hidden');
        })
    })
</script>

</body>

<?php include_once "../components/cp_footer.php"?>

</html>