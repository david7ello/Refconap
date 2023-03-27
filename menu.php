<!-- html comment 
<div id="background"> <img src="images/fondo_02.PNG" class="stretch" alt="" /> </div> -->
<?PHP
if ($_SESSION['tipo'] == 1) {
?>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li class=""><a href="sistema.php" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" /></a></li>

                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">USUARIOS<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AgregarAdm.php">Alta/Edición/Eliminar </a></li>
                                </ul>
                            </li>


                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CURSOS<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="regCursos.php">Registro de cursos</a></li>

                                </ul>
                            </li>

                            <li class="dropdown"><a class="dropdown-toggle" href="evaluarActividad.php">EVALUAR ACTIVIDADES</a>
                            </li>

                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            
                            <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z" />
                                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <br /><br /><br />

<?PHP
}
?>

<?PHP
if ($_SESSION['tipo'] == 2) {
?>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li class=""><a href="sistema.php" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" /></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">INSTRUCTOR<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="evaluarActividad.php">Calificar</a></li>
                                </ul>
                            </li>
                            <li><a href="altaEjercicio2.php">ALTA EJERCICIO 2</a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z" />
                                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                    </svg></a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>

    <br /><br /><br />

<?PHP
}
?>

<?PHP
if ($_SESSION['tipo'] == 3) {
?>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li class=""><a href="sistema.php" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" /></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PARTICIPANTE<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="consultarCalif.php">Consultar calificaciones</a></li>
                                </ul>
                            </li>





                            <ul class="nav navbar-nav pull-right">

                                <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                                            <path d="M7.5 1v7h1V1h-1z" />
                                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                        </svg></a></li>
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <br /><br /><br />

<?PHP
}
?>