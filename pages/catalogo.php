<?php

require_once __DIR__ . '/../components/connection.php';

$link= new_db_connection();

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once "../components/cp_head.php"?>

<body class="bg-darkpurple text-neonyellow">



<header class="pb-4 bg-darkerpurple
               md:px-12
               lg:px-30
               xl:px-52">

    <div class="mb-4">
        <?php include_once "../components/cp_navbar.php"?>
    </div>

    <form class="my-2 mx-5 md:mx-0 md:mt-14 flex" method="get">
        <input placeholder="O que vai ser hoje?"
               class="w-full rounded-xl placeholder:text-neonyellow pl-5 py-1 bg-pink
               lg:placeholder:text-lg lg:h-10
               xl:placeholder:text-xl xl:h-12"
               name="pesquisa"
               value="<?php echo isset($_GET['pesquisa']) ? htmlspecialchars(trim($_GET['pesquisa'])) : ''; ?>">
        <button class="rounded-xl bg-pink px-2 py-1 ml-2">
            <img src="../images/searchAmarelo.svg" class="h-6">
        </button>
    </form>

    <!--

    <div class="flex items-center mt-4 mx-5">
        <img src="../images/filtro.svg" class="h-5 lg:h-6">
        <p class="mx-3 px-6 font-bold text-sm lg:text-lg border-2 border-pink rounded-xl">Tempo</p>
    </div>

    --> <!-- Filtros (por implementar) -->
</header>
<main class="container mx-auto px-5 my-4
             md:px-12
             lg:px-30
             xl:px-52">
    <section class="grid grid-cols-12 gap-2 lg:gap-x-10">
        <?php

        $stmt = mysqli_stmt_init($link);

        if (isset($_GET['pesquisa'])) {

            $query ="
                SELECT  id_bebida, nome_bebida, tempo_preparacao, foto_catalogo
                FROM bebidas
                WHERE nome_bebida LIKE ?
            ";

            if (mysqli_stmt_prepare($stmt, $query)) {
                $pesquisa = "%".$_GET["pesquisa"]."%";
                mysqli_stmt_bind_param($stmt, "s", $pesquisa);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $idBebida, $nomeBebida, $tempoPreparacao, $fotoCatalogo);
            }
        } else {
            $query ="
                SELECT  id_bebida, nome_bebida, tempo_preparacao, foto_catalogo
                FROM bebidas
            ";

            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $idBebida, $nomeBebida, $tempoPreparacao, $fotoCatalogo);
            }
        }

        $contador = 0;

        while (mysqli_stmt_fetch($stmt)) {
            $contador++;
            switch ($contador) {
                case 1:
                    echo '
                    
                    <a class="flex relative items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6" href="../components/sc_contar_cliques.php?id=' . $idBebida . '">
                        <div class="bg-pink py-2 pl-2 w-5/6 xl:w-11/12 xl:pl-6 rounded-xl">
                            <p class="font-bold text-lg mb-2 lg:text-xl">'. $nomeBebida .'</p>
                            <div class="flex text-[#ffffff]">
                                <div class="flex items-center mr-2">
                                    <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                                    <p>'. $tempoPreparacao .'</p>
                                    <p>min</p>
                                </div>
                                <div class="flex">
                                    <img src="../images/dificuldadeNoite.svg"class="w-6 mr-1">
                                    <p>fácil</p>
                                </div>
                            </div>
                        </div>
                        <img src="../images/bebidas/catalogo/'. $fotoCatalogo .'" class="absolute right-0" style="height: 8.5rem">
                    </a>
                    
                    ';
                    break;
                case 2:
                    echo '
                    
                    <a class="flex relative justify-end items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6 sm:justify-normal" href="../components/sc_contar_cliques.php?id=' . $idBebida . '">
                        <div class="bg-pink py-2 pr-2 w-5/6 xl:w-11/12 xl:pr-6 rounded-r-xl sm:rounded-l-xl sm:pl-2">
                            <p class="font-bold text-lg mb-2 text-right lg:text-xl sm:text-left">'. $nomeBebida .'</p>
                            <div class="flex text-[#ffffff]">
                                <div class="flex items-center ml-auto mr-2 sm:ml-2">
                                    <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                                    <p>'. $tempoPreparacao .'</p>
                                    <p>min</p>
                                </div>
                                <div class="flex">
                                    <img src="../images/dificuldadeNoite.svg"class="w-6 mr-1">
                                    <p>fácil</p>
                                </div>
                            </div>
                        </div>
                        <img src="../images/bebidas/catalogo/'. $fotoCatalogo .'" class="absolute left-0 sm:left-auto sm:right-0" style="height: 8.5rem">
                    </a> 
                    
                    ';
                    break;
                case 3:
                    echo '
                    
                    <a class="flex relative items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6 sm:justify-end" href="../components/sc_contar_cliques.php?id=' . $idBebida . '">
                        <div class="bg-pink py-2 pl-2 w-5/6 xl:w-11/12 xl:pl-6 rounded-l-xl sm:rounded-r-xl sm:pr-2">
                            <p class="font-bold text-lg mb-2 text-left lg:text-xl sm:text-right">'. $nomeBebida .'</p>
                            <div class="flex text-[#ffffff] sm:justify-end">
                                <div class="flex items-center mr-2">
                                    <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                                    <p>'. $tempoPreparacao .'</p>
                                    <p>min</p>
                                </div>
                                <div class="flex">
                                    <img src="../images/dificuldadeNoite.svg"class="w-6 mr-1">
                                    <p>fácil</p>
                                </div>
                            </div>
                        </div>
                        <img src="../images/bebidas/catalogo/'. $fotoCatalogo .'" class="absolute right-0 sm:right-auto sm:left-0" style="height: 8.5rem">
                    </div>
                    
                    ';
                    break;
                case 4:
                    echo '
                    
                    <a class="flex relative justify-end items-center mt-10 sm:mb-8 col-span-12 sm:col-span-6" href="../components/sc_contar_cliques.php?id=' . $idBebida . '">
                        <div class="bg-pink py-2 pr-2 w-5/6 xl:w-11/12 xl:pr-6 rounded-xl">
                            <p class="font-bold text-lg mb-2 text-right lg:text-xl">'. $nomeBebida .'</p>
                            <div class="flex text-[#ffffff] justify-end">
                                <div class="flex items-center mr-2">
                                    <img src="../images/tempoNoite.svg" class="w-6 mr-1">
                                    <p>'. $tempoPreparacao .'</p>
                                    <p>min</p>
                                </div>
                                <div class="flex">
                                    <img src="../images/dificuldadeNoite.svg" class="w-6 mr-1">
                                    <p>fácil</p>
                                </div>
                            </div>
                        </div>
                        <img src="../images/bebidas/catalogo/'. $fotoCatalogo .'" class="absolute left-0" style="height: 8.5rem">
                    </a>
                
                    ';
                    $contador = 0;
            }
        }
        ?>
    </section>
</main>

<div class="mt-14">
    <?php include_once "../components/cp_footer.php"?>
</div>

</body>