<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-[url(../images/fundo.jpg)] bg-cover bg-center bg-no-repeat h-svh py-10">
    <section class="px-5 h-full content-center">
        <div class="text-neonyellow bg-darkpurple px-5 py-8 rounded-3xl">
            <div class="font-lily text-center mb-5 text-2xl
                    md:text-3xl
                    lg:text-4xl
                    2xl:text-6xl">Bem-vindo ao Alquimista!</div>
            <div class="font-poppins flex flex-col gap-2">
                <label class="md:text-md
                              lg:text-lg
                              xl:text-xl
                              2xl:text-2xl" for="username">E-mail ou Username</label>
                <input class="bg-pink rounded-md mb-4" type="text" id="username" name="username" required>
                <label class="md:text-md
                       lg:text-lg
                       xl:text-xl
                       2xl:text-2xl" for="password">Password</label>
                <input class="bg-pink rounded-md" type="password" id="password" name="password" required>
            </div>
        </div>
    </section>
</body>

<?php include_once "../components/cp_footer.php"?>

</html>