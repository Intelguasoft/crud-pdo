$(document).ready(function () {
    // cargamos los datos al estar lista la pagina
    readRecords(); // recargamos los registros utilizando readRecords();    
});

// Agregar registro
function addRecord() {
    // obtenemos los valores
    var nombre = $("#nombre").val();
    nombre = nombre.trim();
    var apellidos = $("#apellidos").val();
    apellidos = apellidos.trim();
    var direccion = $("#direccion").val();
    direccion = direccion.trim();
    var email = $("#email").val();
    email = email.trim();
 
    if (nombre == "") {
        alert("El campo nombre es requerido!");
    }
    else if (apellidos == "") {
        alert("El campo apellidos es requerido!");
    }
    else if (direccion == "") {
        alert("El campo apellidos es requerido!");
    }
    else if (email == "") {
        alert("El campo correo electronico es requerido!");
    }
    else {
        // Agregar registro
        $.post("ajax/Crear.php", {
            nombre: nombre,
            apellidos: apellidos,
            direccion: direccion,
            email: email
        }, function (data, status) {
            // cerramos el formulario modal
            $("#add_new_record_modal").modal("hide");
 
            // volvemos a leer los registros
            readRecords();
 
            // limpiamos los campos del formulario modal
            $("#nombre").val("");
            $("#apellidos").val("");
            $("#direccion").val("");
            $("#email").val("");
        });
    }
}

// Obtener registros
function readRecords() {
    $.get("ajax/Listar.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

function getDetails(id) {
    // Obtenemos el id del campo oculto
    $("#hidden_usuario_id").val(id);
    $.post("ajax/Detalle.php", {
            id: id
        },
        function (data, status) {
            // convertimos la info a JSON
            var usuario = JSON.parse(data);
            // asignamos los valores existentes a los campos del modal
            $("#update_nombre").val(usuario.nombre);
            $("#update_apellidos").val(usuario.apellidos);
            $("#update_direccion").val(usuario.direccion);
            $("#update_email").val(usuario.email);
            $("#hidden_usuario_id").val(usuario.id);
        }
    );
    // Abrimos el modal
    $("#update_user_modal").modal("show");
}

function updateRecord() {
    // obtenemos los valores
    var nombre = $("#update_nombre").val();
    nombre = nombre.trim();
    var apellidos = $("#update_apellidos").val();
    apellidos = apellidos.trim();
    var direccion = $("#update_direccion").val();
    direccion = direccion.trim();
    var email = $("#update_email").val();
    email = email.trim();
 
    if (nombre == "") {
        alert("El campo nombre es requerido!");
    }
    else if (apellidos == "") {
        alert("El campo apellidos es requerido!");
    }
    else if (direccion == "") {
        alert("El campo apellidos es requerido!");
    }
    else if (email == "") {
        alert("El campo correo electronico es requerido!");
    }
    else {
        // obtenemos el dato del campo oculto
        var id = $("#hidden_usuario_id").val();
 
        // Actualizamos los datos por medio de ajax
        $.post("ajax/Editar.php", {
                id: id,
                nombre: nombre,
                apellidos: apellidos,
                direccion: direccion,
                email: email
            },
            function (data, status) {
                // ocultamos la ventana modal
                $("#update_user_modal").modal("hide");
                // recargamos los registros utilizando readRecords();
                readRecords();
            }
        );
    }
}

function deleteRecord(id) {
    var conf = confirm("Esta seguro de borrar este registro?");
    if (conf == true) {
        $.post("ajax/Eliminar.php", {
                id: id
            },
            function (data, status) {
                // recargamos los registros utilizando readRecords();
                readRecords();
            }
        );
    }
}

