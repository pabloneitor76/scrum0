
<?php include('controllers/controladorDocentes.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="public/css/main.css">
    <title>Sistema de Publicidad</title>
</head>
<body>
    <div class="col-md-4 center-block quitar-float text-center espacio-arriba uno">
        <marquee direction = up>
            <img src="uploads/logo.png" class="center-block">
            <h1 class="text-center">BIENVENIDOS A LOS LABORATORIOS DE INFORMATICA Y SISTEMAS</h1>
        </marquee>
        <h1 class="lobster morado">Tipos de letras</h1>
        <h2>Ven y diviertete con nosotros</h2>
        <h3 class="pt-sans">Bienvenidos a los laboratorios de Informatica y Sistemas</h3>
        <nav>
            <a href="http://google.com" class="espacio-derecha">Buscanos en:</a>
            <a href="http://facebook.com" class="espacio-derecha">Tambien estamos en facebook</a>
            <a href="" class="espacio-derecha">acercate y disfruta</a>
        </nav>
    </div>
    <div class="dos">
        <p>Segundo espacio</p>
    </div>
    <div class="tres">
        <p>Tercer espacio</p>
    </div>
    <div class ="cuatro">
        <p>cuarto espacio</p>
    </div>
    <MARQUEE bgcolor="#881C82">
        <h3 class="pt-sans">
            <tbody class="celda">
              <?php
                $usuarios = listaDocentes();


                foreach ($usuarios as $usuario):
              ?>
              
              <tr class="celda">
                <td class="celda"><?php echo $usuario['id_docentes'] ?></td>
                <td><?php echo $usuario['nombre'] ?></td>
                <td><?php echo $usuario['hora'] ?></td>
                <td><?php echo $usuario['materia'] ?></td>
              </tr>
            
              <?php endforeach; ?>
            </tbody>
        </h3>
    </MARQUEE>
</body>
</html>