<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD usando PDO</title>
 
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <!-- Bootstrap CSS Theme  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
</head>
<body>
	<!-- Content Section -->
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <h1>PHP CRUD usando PDO</h1>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="pull-right">
	                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Nuevo usuario</button>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <h3>Registros:</h3>
	 
	            <div class="records_content"></div>
	        </div>
	    </div>
	</div>
	<!-- /Content Section -->
<!-- Bootstrap Modals -->
	<!-- Modal - Agregar nuevo registro -->
	<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel">Agregar registro</h4>
	            </div>
	            <div class="modal-body">
	 
	                <div class="form-group">
	                    <label for="nombre">Nombre</label>
	                    <input type="text" id="nombre" placeholder="Nombre" class="form-control"/>
	                </div>
	 
	                <div class="form-group">
	                    <label for="apellidos">Apellidos</label>
	                    <input type="text" id="apellidos" placeholder="Apellidos" class="form-control"/>
	                </div>

	                <div class="form-group">
	                    <label for="direccion">Dirección</label>
	                    <input type="text" id="direccion" placeholder="Dirección" class="form-control"/>
	                </div>
	 
	                <div class="form-group">
	                    <label for="email">Correo electronico</label>
	                    <input type="text" id="email" placeholder="Correo electronico" class="form-control"/>
	                </div>
	 
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	                <button type="button" class="btn btn-primary" onclick="addRecord()">Guardar</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- // Modal nuevo registro -->

	<!-- Modal - Actualizar registro -->
	<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel">Editar registro</h4>
	            </div>
	            <div class="modal-body">
	 
	                <div class="form-group">
	                    <label for="update_nombre">Nombre</label>
	                    <input type="text" id="update_nombre" placeholder="Nombre" class="form-control"/>
	                </div>
	 
	                <div class="form-group">
	                    <label for="update_apellidos">Apellidos</label>
	                    <input type="text" id="update_apellidos" placeholder="Apellidos" class="form-control"/>
	                </div>

	                <div class="form-group">
	                    <label for="update_direccion">Dirección</label>
	                    <input type="text" id="update_direccion" placeholder="Dirección" class="form-control"/>
	                </div>
	 
	                <div class="form-group">
	                    <label for="update_email">Correo electronico</label>
	                    <input type="text" id="update_email" placeholder="Correo electronico" class="form-control"/>
	                </div>
	 
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	                <button type="button" class="btn btn-primary" onclick="updateRecord()" >Actualizar</button>
	                <input type="hidden" id="hidden_usuario_id">
	            </div>
	        </div>
	    </div>
	</div>
	<!-- // Modal actualizar registro -->
<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<!-- Bootstrap JS file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 
<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>