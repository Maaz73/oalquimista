<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-[url(../images/fundo.jpg)] bg-cover bg-center bg-no-repeat h-svh py-10">
<section class="px-5 h-full content-center
                    sm:px-8
                    md:px-32
                    lg:px-62
                    xl:px-80">
    <div class="text-neonyellow bg-darkpurple/60 backdrop-blur-xs px-5 py-8 rounded-3xl
                    sm:px-8
                    md:px-12
                    lg:px-16
                    xl:px-20">
        <div class="font-lily text-center mb-5 text-2xl
                    md:text-3xl
                    lg:text-4xl
                    2xl:text-6xl">Junta-te ao Alquimista!</div>

        <div class="font-poppins grid grid-cols-2 gap-x-4 gap-y-4">
            <div class="col-span-1 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="nome">Nome</label>
                <input class="bg-pink rounded-md p-1" type="text" id="nome" name="nome" required>
            </div>
            <div class="col-span-1 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="apelido">Apelido</label>
                <input class="bg-pink rounded-md p-1" type="text" id="apelido" name="apelido" required>
            </div>
            <div class="col-span-2 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="email">E-mail</label>
                <input class="bg-pink rounded-md p-1" type="email" id="email" name="email" required>
            </div>
            <div class="col-span-2 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="user">Nome de utilizador</label>
                <input class="bg-pink rounded-md p-1" type="text" id="user" name="user" required>
            </div>
            <div class="col-span-1 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="pass">Senha</label>
                <input class="bg-pink rounded-md p-1" type="password" id="pass" name="pass" required>
            </div>
            <div class="col-span-1 flex flex-col gap-y-1">
                <label class="text-sm
                              md:text-md
                              xl:text-lg
                              2xl:text-xl" for="passconfirm">Confirmar senha</label>
                <input class="bg-pink rounded-md p-1" type="password" id="passconfirm" name="passconfirm" required>
            </div>
        </div>

        <button class="bg-neonyellow text-pink font-poppins mt-6 w-full p-2 rounded-full uppercase font-bold text-md
                                md:text-lg
                                lg:text-xl
                                2xl:text-2xl">CRIAR CONTA</button>

    </div>

    <div class="text-center font-bold bg-darkpurple/60 backdrop-blur-xs px-5 py-4 mt-6 rounded-full
                    sm:px-8
                    md:px-12
                    lg:px-16
                    xl:px-20">
        <p class="text-cream text-sm
                        lg:text-md
                        xl:text-lg
                        2xl:text-xl">Já tens uma conta? <a href="login.php" class="text-neonyellow underline">Faça login</a></p>
    </div>
</section>
</body>

<?php include_once "../components/cp_footer.php"?>

</html>