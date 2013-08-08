<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <meta charset="utf-8">
        <title>ltiviaOT</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="googlebot" content="index,follow"/>
        <meta name="author" content="Ing. Jonathan Olier Miranda"/>
        <meta name="copyright" content="Todos los derechos reservados por AltiviaOT.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/css/altiviaot.min.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 16%;
                padding-bottom: 40px;
                background-image: url("theme/img/blue-gradient-bg.png");
                background-repeat: repeat-x;
                background-color: #002958;
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;
                        border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                        box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
            footer{
                color: #fff;
                margin-top: 4%;
                padding-left: 36%;
                padding-right: 36%;
                text-align: center;
            }
        </style>
        <link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/css/altiviaot-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/html5shiv.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/fav.ico">
    </head>
    <body>
        <div class="container">
            <form class="form-signin" action="">
                <h2 class="form-signin-heading">Iniciar Sesion</h2>
                <div id="div_alert" class="hide">
                    <i id="icon_ok" class="icon-ok-circle hide"></i>
                    <i id="icon_remove" class="icon-remove-circle"></i>
                    <p>ERROR</p>
                </div>
                <input id="input_email" name="input_email" type="text" class="input-block-level" placeholder="Email address">
                <input id="input_pass" name="input_pass" type="password" class="input-block-level" placeholder="Password">
                <label class="checkbox">
                    <input id="input_remenber" name="input_remenber" type="checkbox" value="remember-me"> Recuerdame
                </label>
                <button id="btn_submit_form" class="btn btn-primary" type="submit">Iniciar Sesion</button>
            </form>
        </div>
        <footer><p>&copy; <a href="http://altiviaot.com/">AltiviaOT</a> 2012</p></footer>

        <script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $("#btn_submit_form").click(function (e){
                e.preventDefault();
                var parametros = {
                    "user" : $("#input_email").attr('value'),
                    "pass" : $("#input_pass").attr('value')
                };
                /* Convertir clave en MD5 */

                $.ajax({
                    data:  parametros,
                    url:   'php/session/login.php',
                    type:  'post',
                    dataType: 'json',
                    beforeSend: function(){
                        $("#div_alert").removeClass('hide');
                        $("#div_alert").addClass('alert alert-alert-block');
                        $("#div_alert p").html('<img src="theme/img/info-loader.gif" alt=""> Cargando...');
                    },
                    success: function(response){
                        $("#div_alert").removeClass('hide');
                        $("#icon_ok").removeClass('hide');
                        $("#div_alert").addClass('alert alert-success');
                        $("#div_alert p").html(response);
                    },
                    error: function(response){
                        $("#div_alert").removeClass('hide');
                        $("#icon_remove").removeClass('hide');
                        $("#div_alert").addClass('alert alert-error');
                        $("#div_alert p").html(response);
                    }
                });
            });
        </script>
    </body>
</html>