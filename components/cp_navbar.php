
<nav class="md:hidden py-5 px-5">
    <div class="flex">
        <button onclick="abrirNav()" id="abrir" class="block">
            <img src="../images/menu.svg" class="h-5">
        </button>
        <button onclick="fecharNav()" id="fechar" class="hidden ml-auto mt-auto">
            <img src="../images/adicionarAmarelo.svg" class="h-7 rotate-45">
        </button>
    </div>

    <div class="flex flex-col h-100 hidden font-bold text-lg" id="nav">
        <a href="" class="pb-3">Home</a>
        <a href="" class="pb-3">Catálogo</a>
        <a href="" class="pb-3">MockTails</a>
        <a href="" class="pb-3">Perfil</a>
        <a href="" class="pb-3">Sobre Nós</a>
        <a href="" class="pb-3">FAQ</a>
    </div>
</nav>

<nav class="w-full bg-darkpurple py-4 rounded-b-3xl hidden md:block md:h-14 lg:h-16 z-10">
    <div class=" text-center font-semibold md:text-lg lg:text-xl flex justify-around items-start">
        <a href="../pages/index.php" class="w-24">Home</a>
        <a href="../pages/catalogo.php" class="w-24">Catálogo</a>
        <a href="../pages/index.php" class="w-24">MockTails</a>
        <img src="../images/logoNav.svg" class="md:size-20 lg:size-24">
        <a href="../pages/perfil.php" class="w-24">Perfil</a>
        <a href="../pages/sobrenosNoite.php" class="w-24">Sobre Nós</a>
        <a href="#" class="w-24">FAQ</a>
    </div>
</nav>