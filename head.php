<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REFCONAP</title>
    <!--link rel="icon" href="images/icono.PNG" type="image/x-icon" /-->

    <!--link rel="stylesheet" type="text/css" href="css/menuMorado.css" /-->
    <link rel="stylesheet" type="text/css" href="css/menu1.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css" />
    <!--link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="css/dataTables.css">
    <link rel="stylesheet" type="text/css" href="css/estiloGeneral.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/ejercicioDos.css" />
    <link rel="stylesheet" type="text/css" href="css/ejercicioUno.css" />

    <!-- Componentes del JS-->
    <script type="text/javascript" src="js/es-ES.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="ejerUno.js"></script>




    <!-- Función que permite restringir los campos a que solo acepte numeros-->
    <script type="text/javascript">
        function valideKey(evt) {

            // code is the decimal ASCII representation of the pressed key.
            var code = (evt.which) ? evt.which : evt.keyCode;

            if (code == 8) { // backspace.
                return true;
            } else if (code >= 48 && code <= 57) { // is a number.
                return true;
            } else { // other keys.
                return false;
            }
        }
    </script>
</head>