<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
</head>
<body>

	<!-- Editar  Registro -->
<div class="modal" id="editar<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal">
            <div class="modal-header bg-success text-white">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar Registro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellido" value="<?php echo $row['apellido']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Eliminar Registro -->
<div class="modal fade" id="eliminar<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
            	<center><h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	

			<div class="row">
			    <p class="text-center">¿Seguro que quiere eliminar el registro de:?</p>
				   <br>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="input-group">
                                  <span class="input-group-addon">Nombre:  </span>
                                  <h8 class="text-center"><strong><?php echo $row['nombre']; ?></strong></h8>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="input-group">
                                  <span class="input-group-addon">Apellido:  </span>
								  <h8 class="text-center"><strong><?php echo $row['apellido']; ?></strong></h8>
                                </div>
                            </div>
                        </div>
                    </div>             
								
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript " src="node_modules/popper.js/dist/umd/popper.min.js "></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

</body>
</html>

