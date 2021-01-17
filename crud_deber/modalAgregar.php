<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Persona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    

</head>
<body>
    <!-- Agregar Nuevo Registro -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background: #EFF7F1">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title font-weight-bold" id="exampleModalScrollableTitle">Registro <i class="fas fa-user-plus"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="add.php">
                            <div>
                                <label class="badge badge-danger">Datos generales</label>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-6 ">
                                    <label class="control-label " >Nombres</label>
                                    <div class="input-group ">
                                        <span class="input-group-text "><i class="fa fa-info "></i></span>
                                        <input type="text" class="form-control" placeholder="Nombres" required name="nombre">
                                </div>
							</div>
							<div class="form-group col-md-6 ">
                                <label class="control-label " >Apellidos</label>
                                <div class="input-group ">
                                    <span class="input-group-text "><i class="fa fa-info "></i></span>
                                    <input type="text" class="form-control" placeholder="Apellidos" required name="apellido">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6 ">
                                    <label class="control-label " >Direccion</label>
                                    <div class="input-group ">
                                        <span class="input-group-text "><i class="fas fa-map-marker-alt "></i></span>
                                        <input type="text" class="form-control" placeholder="Direccion.." required name="direccion">
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                                <button type="submit" name="add" class="btn btn-success"><span class="fa fa-save"></span> Guardar</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>
</body>
   
</html>










