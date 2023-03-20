<?php
include("valida_pagina.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("head.php")
?>

<body>
    <main>

        <div>
            <img src="images/REFCONAP.png" width="20%" alt="Logotipo">

            <img class="imgC" src="images/imgPinstruct.png" width="50%" alt="PostIt">
        </div>

        <section class="menuEjeDos">
            <ul>
                <?php
                if ($_SESSION['tipo'] == 1 or $_SESSION['tipo']==2) {
                ?>
                <a href="altaEjercicio2.php">ALTA ACTIVIDAD</a>  
                <?php
                }
                ?> 
                <a href="seleccionEjercicio2.php">RESOLVER ACTIVIDAD</a>

                <a href="sistema.php">REGRESAR</a>
              

            </ul>
            <!-- <div>
                <input class="botConf" type="submit" value="Alta actividad"/>
            </div>
            <div>
                <input class="botConf" type="submit" value="Alta actividad"/>
            </div>
            <div>
                <input class="botConf" type="submit" value="Alta actividad"/>
            </div>
            <div>
                <input class="botConf" type="submit" value="Alta actividad"/>
            </div>
            <div>
            <a href="/cerrar.php"><input class="botCerrar" type="submit" value="CERRAR SESIÓN"/></a>
            </div> -->
        </section>
    </main>

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <!-- Cargamos nuestro componente de React. -->
    <script src="./mapa_mental/src/Home.jsx"></script>

</body>

</html>