
<nav class="md:hidden py-3 px-3 relative z-40">
    <div id="nav_mobile_bg" class="flex justify-between transition-all duration-300 relative z-50 rounded-2xl py-2 px-2">
        <button onclick="abrirNav()" id="abrir" class="block">
            <img src="../images/menu.svg" class="size-12 px-1">
        </button>
        <button onclick="fecharNav()" id="fechar" class="hidden ml-auto mt-auto">
            <img src="../images/adicionarAmarelo.svg" class="size-12 py-1 rotate-45">
        </button>
        <button id="logoBtn">
            <img src="../images/logo.svg" class="size-12">
        </button>
        <button id="catalogueBtn">
            <img src="../images/catalogue_btn.svg" class="size-12 py-1">
        </button>
    </div>

    <div class="flex flex-col absolute hidden font-bold text-xl inset-0 top-0 left-0 w-screen h-screen bg-darkpurple z-40 py-20 px-5 text-neonyellow" id="nav">
        <a href="../pages/index.php" class="pb-3">Home</a>
        <a href="../pages/catalogo.php" class="pb-3">Catálogo</a>
        <a href="" class="pb-3">MockTails</a>
        <a href="../pages/perfil" class="pb-3">Perfil</a>
        <a href="../pages/sobrenosNoite.php" class="pb-3">Sobre Nós</a>
        <a href="../pages/faqNoite.php" class="pb-3">FAQ</a>
    </div>
</nav>

<nav class="w-full bg-darkpurple py-4 rounded-b-3xl hidden md:block md:h-14 lg:h-16 z-10 text-neonyellow drop-shadow-nav">
    <div class=" text-center font-semibold md:text-lg lg:text-xl flex justify-around items-start">
        <a href="../pages/index.php" class="w-24">Home</a>
        <a href="../pages/catalogo.php" class="w-24">Catálogo</a>
        <a href="../pages/index.php" class="w-24">MockTails</a>
        <img src="../images/logoNav.svg" class="md:size-20 lg:size-20">
        <a href="../pages/perfil.php" class="w-24">Perfil</a>
        <a href="../pages/sobrenosNoite.php" class="w-24">Sobre Nós</a>
        <a href="../pages/faqNoite.php" class="w-24">FAQ</a>
    </div>
</nav>