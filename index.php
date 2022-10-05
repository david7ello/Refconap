<?PHP
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?PHP
include("head.php");
?>

<body class="fondo">
    <!-- <div id="background"> <img src="images/fondo_03.PNG" class="stretch" alt="" /> </div-->

    <br /><br />
    <div align="center">
        <img style="margin-top:-50px;" src="images/REFCONAP.png" width="15%" height="15%">
    </div>
    <!--br /><br /><br /-->
    <div align="center">
        <form action="validar.php" class="" method="post" role="form" id="forms">
            <div class="div_container_sesion" style="width:340px; height:auto;">
                <div class="div_container_title_sesion" style="height:50px;">
                    <font class="font_title_sesion"> <b>INICIO DE SESIÓN REFCONAP</b> </font>
                </div><br />
                <div>
                    <div style="width:85%; ">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                Usuario:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo de usuario" value="" />
                                </div>
                            </div>
                        </div><br />
                        <div class="row">
                            <div class="col-md-12 text-left">
                                Contrase&ntilde;a:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" value="" />
                                </div>
                            </div>
                        </div><br />
                    </div>

                    <div class="row">
                        <div class="col-md-1 text-center"></div>
                        <div class="col-md-10 text-left">
                            <div class="input-group">
                                <input type="radio" name="tipo" value="A" checked> Administrador<br>
                            </div>
                        </div>
                        <div class="col-md-1 text-center"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 text-center"></div>
                        <div class="col-md-10 text-left">
                            <div class="input-group">
                                <input type="radio" name="tipo" value="I"> Instructor<br>
                            </div>
                        </div>
                        <div class="col-md-1 text-center"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 text-center"></div>
                        <div class="col-md-10 text-left">
                            <div class="input-group">
                                <input type="radio" name="tipo" value="P"> Participante<br>
                            </div>
                        </div>
                        <div class="col-md-1 text-center"></div>
                    </div><br />

                    <!--Captcha -->
                                                           
                        <div class="col-md-1 text-center">
                            <div class="g-recaptcha" data-sitekey="6LeedbUhAAAAAIZtaCHg6ohzWImMyqUO5ctptvO3">
                            
                            </div>

                        </div>
                     <br><br>





                    <div class="row">
                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-default boton_color" >Entrar</button>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </form>
        <!--<br><br><br /> -->
        <?PHP
        if (!isset($_SESSION["error_session"]) or $_SESSION["error_session"] == "") {
            $_SESSION["error_session"] = "";
        } else {
            echo '<div class="form-group has-feedback" style="width:450px;">';
            echo '<div class="alert alert-danger">';
            echo '<button class="close" data-dismiss="alert"><span>&times;</span></button>';
            echo $_SESSION["error_session"];
            echo '</div><br />';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>