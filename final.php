<?php 
    if (isset($_POST['submit'])) {
        // Create connection
        $servername = "localhost";
        $username = "root";
        $password = "%sabao751";
        $database = "lance_me";
        $conn = new mysqli($servername, $username, $password, $database);   
        
        $email = $conn->escape_string($_POST['email']);
        
        // Check connection
        if (!mysqli_connect_errno()) {
            $sql = "INSERT INTO users (email) VALUES ('$email')";
            if ($conn->query($sql)) {
                // echo("Inseriu info.");
            } else {
                // echo("Não inseriu.");
            }
        }else {
            // echo("Não inseriu pela conexão.");
            // exit();
        }
    }
?>
<!DOCTYPE html>
<html class="full" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Lucas Mota">
        <link rel="stylesheet" href="css/iziModal.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <title>Exemplo</title>
    </head>
    <body>
        <nav class="navbar navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://lanceme.co"></a>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>  
                    <h1 style="color:#e9474a">Agradecemos o interesse!</h1>
                    <h1><small>Logo, logo, entraremos em contato para que você possa iniciar seus investimentos! <br>Obrigado!  </small></h1>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </body>
</html>