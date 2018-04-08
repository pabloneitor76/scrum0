
<?php include('../controllers/autentificar.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Usuarios</title>
        <link type="text/css" rel="stylesheet" href="../../public/css/estilos.css"/>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <nav>
                    <a href="../index.php">Inicio        </a></li>  
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
          <h1>Lista Paises</h1>
          <table border="2">
            <thead>
              <tr>
                <td>NombresPais     </td>
                <td>ValorGoles   </td>
              </tr>
            </thead>

            <tbody>
              <?php 
                $pais = listaPaises();

                foreach ($pais as $pais):
              ?>
              <tr>  
                <td><?php echo $pais['pais'] ?>       </td>
                <td><?php echo $pais['valor'] ?>      </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table> 
        </section>
    </body>
</html>