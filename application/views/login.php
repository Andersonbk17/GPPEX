<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>LOGIN GPEXT</title>

        <!-- Bootstrap core CSS -->
        <link href=<?php base_url(); ?>"assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href=<?php base_url(); ?>"assets/css/signin.css" rel="stylesheet">
        <link href=<?php base_url(); ?>"assets/css/bootstrap-theme.css" rel="stylesheet">


        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src=<?php base_url(); ?>"assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php base_url(); ?>assets/js/jquery.min.nova.js"></script>

        <!-- JQUERY COOKIE -->
        <script type="text/javascript" src="<?php base_url() ?>assets/js/jquery.cookie/jquery.cookie.js"></script>




        <script type="text/javascript">

            $(document).ready(function () {
                $.cookie('primeiroAcesso', 'false', {expires: 1});
            });
        </script>
    </head>

    <body>



        <div class="container" style="position: relative;width: 55%">

            <div style="background-color: whitesmoke; padding: 60px;" >
                <div>
                    <h3>SGPPEX - LOGIN</h3>

                </div>



                <form class="form-signin" action="<?php base_url(); ?>Principal">
                    <!--<h2 class="form-signin-heading">Please sign in</h2> -->
                    <label for="inputEmail" class="sr-only">Email </label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email " required autofocus>
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login </button>
                </form>

            </div>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=<?php base_url(); ?>"assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
