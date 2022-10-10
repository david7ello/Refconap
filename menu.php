<!-- html comment 
<div id="background"> <img src="images/fondo_02.PNG" class="stretch" alt="" /> </div> -->
<?PHP
if ($_SESSION['tipo'] == 'ADMIN') {
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
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></a></li>

                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ADMINISTRADOR<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AgregarAdm.php">Alta Administrador </a></li>
                                    <li><a href="modificarAdm.php">Modificar Administrador</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">INSTRUCTOR<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Alta Instructor</a></li>
                                    <li><a href="#">Modificar Instructor</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PARTICIPANTE<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Agregar Participante</a></li>
                                    <li><a href="#">Modificar Participante</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CURSOS<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="regCursos.php">Registro de cursos</a></li>
                                    
                                </ul>
                            </li>



                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                            </svg></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cambiarContrasena.php">Cambiar Contrase&ntilde;a Admin.</a></li>
                                    
                                </ul>
                            </li>
                            <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z"/>
                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
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
if ($_SESSION['tipo'] == 'INST') {
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
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">INSTRUCTOR<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Calificar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PARTICIPANTE<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Agregar Participante</a></li>
                                    <li><a href="#">Modificar Participante</a></li>
                                    <li><a href="#">Eliminar Participante</a></li>
                                    <li><a href="#">Consultar Calificaciones por grupo</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                            </svg></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cambiarContrasena.php">Cambiar Contrase&ntilde;a Admin.</a></li>
                                    <li><a href="cambiarContrasenaDocente.php">Restablecer Contrase&ntilde;a a Empleado</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z"/>
                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
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
if ($_SESSION['tipo'] == 'PART') {
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
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PARTICIPANTE<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Consultar calificaciones</a></li>
                                    <li><a href="#">Consultar calificaciones</a></li>
                                </ul>
                            </li>
                            
                        
                        
                        

                        <ul class="nav navbar-nav pull-right">
                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=#597e8d class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                            </svg></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cambiarContrasena.php">Cambiar Contrase&ntilde;a Admin.</a></li>
                                    <li><a href="cambiarContrasenaDocente.php">Restablecer Contrase&ntilde;a a Empleado</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="salida.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="1.5" fill=#597e8d class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z"/>
                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
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

