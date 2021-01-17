<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP CRUD FERCHO</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
	
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success">
  		<a class="navbar-brand" href="https://jquery.com/" target="_blank">Practica 7 Jquery</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	  	<div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">      	
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" placeholder="Buscar" type="text">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
	  	</div>
	</nav>
	
</div>
<br>
<br>
<br>

<div class="container">
    <h1 class="page-header text-center">LISTA DE PERSONAS REGISTRADAS </h1>
	<div class="row">
		<div class="col-sm-12">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped " style="margin-top:20px;">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dirección</th>
					<th>Acción</th>
				</thead>
				<tbody>
					<?php
						// incluye la conexión
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM persona';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['nombre']; ?></td>
						    		<td><?php echo $row['apellido']; ?></td>
						    		<td><?php echo $row['direccion']; ?></td>
						    		<td>
						    			<a href="#editar<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
						    			<a href="#eliminar<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
						    		</td>
						    		<?php include('edit_eliminar_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
						//cerrar conexión
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style type="text/css">
.footer {
    background-image: url(http://www.keoniworld.com/wp-content/uploads/2016/06/swaying-field-grass.gif);
    background-position: center bottom;
    background-size: 100% auto;
    background-repeat: repeat-x;
    min-height: 10vh;
}

.footer {
    text-align: center;
    padding: 50px 0 30px;
}

.footer p {
    color: #f8f8f8;
    font-size: 24px;
}

.footer a.totop {
    color: #fff;
    margin-bottom: 30px;
}

.footer a.totop:focus {
    outline: 0;
}

</style>
	
	
<footer class="footer">
    <nav>
            <p>
                <a href="acerca.html">Contacto: 0939045202</a>|
                <a href="https://www.geeksforgeeks.org/privacy-policy/">luis.f.medina@unl.edu.ec</a>|
                <a href="https://www.geeksforgeeks.org/careers/">2020</a>
                <p>&copy; Copyright 2020 HTML.am</p>
                <button onclick="location.href='index.php'" class="submit" type="button">INICIO</button>
            </p>
        </nav>
    </footer>
<?php include('modalAgregar.php'); ?>
<script type="text/javascript " src="node_modules/popper.js/dist/umd/popper.min.js "></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

</body>
</html>
