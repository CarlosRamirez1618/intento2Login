<html>
    <head>
        <title>Login </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/carta.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=DynaPuff:wght@400..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">


    </head>
    <body>

    <header class="titulo">
        <h1 class="name">Crazy motors</h1>
    </header>

    
    <div class="panelCarta">
    <div class="card">
        <div class="card-header">
            <h3>Login</h3>
        </div>
        <div class="card-body">
            <form method="post" action="loginRespuesta.php">
                <div class="form-group">
                    <label for="formGroupExampleInput" class="txt">Usuario:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="usuario" placeholder="Ingresar usuario" required>
                    <div id="alerta" class="alert alert-danger" role="alert" style="display:none;" aria-live="assertive">
                        <strong>Error</strong> quiza no escribiste bien tu usuario
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2" class="txt">Password:</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="Ingresar password" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Acceder</button>
                </div>
            </form>
        </div>
    </div>
</div>



</body>


</html>
<script>
    var error = "<?php echo $_GET['error']; ?>"; // El valor debe ser incrustado correctamente con PHP
    if(error == 1){
        document.getElementById("alerta").style.display="block";
    }

</script>
