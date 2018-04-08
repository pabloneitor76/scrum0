<?php //include('controllers/autentificar.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formularios</title>

        <link type="text/css" rel="stylesheet" href="../public/css/estilos.css"/>
        <link type="text/css" rel="stylesheet" href="../public/css/formularios.css"/>
    </head>

    <body>
        <header>
            <div class="wrapper">
                

                <nav>
                    <a href="../index.php">Inicio</a></li>
                    
                    <a href="views/lista.php">Ver Lista</a>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
            <h1>Tabla</h1>

            <fieldset>
              <form action="controllers/autentificar.php" method="POST">
                <label>Equipo</label>
                <input type="text" name="pais" required>
                <br>

                <label>Valor en Goles</label>
                <input type="text" name="valor" required>

                <br>
                <input type="submit" name="registrar" value="registrar">


              </form>
            </fieldset>
        </section>
    </body>
</html>