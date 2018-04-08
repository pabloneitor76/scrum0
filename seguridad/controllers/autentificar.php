<?php 
	require_once('conexionDB.php');

	session_start();

	if (isset($_REQUEST['registrar'])) {
		$nombre_pais   	= $_REQUEST['pais'];
		$valor_pais		= $_REQUEST['valor'];

		registrarPais($nombre_pais, $valor_pais);

		header('Location: ../index.php');
	}

	/*function mostrarPaises($paisnom, $valorpais) {
		global $conexion;

		$query = "SELECT *
		          FROM lista
		          ";

	  $res_query = mysqli_query($conexion, $query);
	  $nfilas    = mysqli_num_rows($res_query);

	  
	  
	  if ($nfilas == 1 ) {

	  	$usuario = mysqli_fetch_array($res_query, MYSQLI_ASSOC);

	  	$_SESSION['nombre_pais'] = $usuario['pais'];
	  	$_SESSION['valor_pais'] = $usuario['valor'];
	  	$_SESSION['id_pais']		= $usuario['id'];
	  	
	  	


	  	header('Location: ../index.php');
	  } else {
	  	header('Location: ../index.php');
	  }
	}*/

	function listaPaises() {
		global $conexion;

		$query     = 'SELECT * FROM lista ORDER BY `valor` ASC';
		$res_query = mysqli_query($conexion, $query)
		  					   or die('Revise su consulta SELECT');
		mysqli_close($conexion);

		$num_reg = mysqli_num_rows($res_query);

		for ($i = 0; $i < $num_reg; $i++) { 
			$lista[$i] = mysqli_fetch_array($res_query, MYSQLI_ASSOC);
		}

		return $lista;
	}

	function registrarPais($nombrPa, $valorPa) {
		global $conexion;

		$query = "INSERT INTO lista (`pais`, `valor`) 
		          VALUES('$nombrPa', '$valorPa')";

		mysqli_query($conexion, $query) or die('Revise su consulta de insercion');
		mysqli_close($conexion);
	}

?>