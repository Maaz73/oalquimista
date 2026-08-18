<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-[url(../images/fundo.jpg)] bg-cover bg-center bg-no-repeat h-svh py-10">
    <section class="px-5 h-full content-center
                    sm:px-8
                    md:px-12
                    lg:px-30
                    xl:px-52">
        <div class="text-neonyellow bg-darkpurple/60 backdrop-blur-xs px-5 py-8 rounded-3xl
                    sm:px-8
                    md:px-12
                    lg:px-16
                    xl:px-20">
            <div class="font-lily text-center mb-5 text-2xl
                    md:text-3xl
                    lg:text-4xl
                    2xl:text-6xl">Bem-vindo ao Alquimista!</div>
            <div class="font-poppins flex flex-col gap-2">
                <label class="md:text-md
                              lg:text-lg
                              xl:text-xl
                              2xl:text-2xl" for="username">E-mail ou Username</label>
                <input class="bg-pink rounded-md mb-4 p-1" type="text" id="username" name="username" required>
                <label class="md:text-md
                       lg:text-lg
                       xl:text-xl
                       2xl:text-2xl" for="password">Password</label>
                <input class="bg-pink rounded-md p-1" type="password" id="password" name="password" required>
            </div>
            <label class="font-poppins text-neonyellow flex flex-row items-center my-6 gap-3
                          md:text-md
                          lg:text-lg
                          xl:text-xl
                          2xl:text-2xl">
                <input type="checkbox" class="relative appearance-none rounded-full inline-block h-7 w-16 cursor-pointer bg-pink transition-all after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-1 after:h-3/4 after:aspect-square after:rounded-full after:bg-darkpurple after:transition-all checked:bg-neonyellow checked:after:bg-pink checked:after:left-9/10 checked:after:-translate-x-9/10">
                Manter sessão
            </label>
            <button class="bg-neonyellow text-pink font-poppins w-full p-2 rounded-full uppercase font-bold text-md
                                md:text-lg
                                lg:text-xl
                                2xl:text-2xl">LOG IN</button>
            <div class="text-center mt-6 text-sm
                        lg:text-md
                        xl:text-lg
                        2xl:text-xl">
                <a class="font-poppins text-cream underline" href="#">Recuperar Password</a>
            </div>
        </div>
        <div class="text-center font-bold bg-darkpurple/60 backdrop-blur-xs px-5 py-4 mt-6 rounded-full
                    sm:px-8
                    md:px-12
                    lg:px-16
                    xl:px-20">
            <p class="text-cream text-sm
                        lg:text-md
                        xl:text-lg
                        2xl:text-xl">Ainda não tens conta? <span class="text-neonyellow underline">Inscreve-te no Alquimista</span></p>
        </div>
    </section>
</body>

<?php include_once "../components/cp_footer.php"?>

</html>