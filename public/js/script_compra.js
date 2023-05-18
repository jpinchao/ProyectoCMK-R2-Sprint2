
$(document).ready(function() {
    // Configuración de DataTables
    var tablaDatos = $('#tabla-datos').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });

    // Función para cargar los datos desde la base de datos y mostrarlos en la tabla
    function cargarDatos() {
        $.ajax({
            url: 'datos.php',
            type: 'POST',
            dataType: 'json',
            success: function(datos) {
                tablaDatos.clear();
                for (var i = 0; i < datos.length; i++) {
                    tablaDatos.row.add([
                        datos[i].id,
                        datos[i].nombre,
                        datos[i].apellido,
                        datos[i].correo
                    ]).draw();
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    // Cargar los datos al iniciar la página
    cargarDatos();

    // Función para aplicar los filtros por columnas
 
// Filtro por ID
$('#filter-id').on('keyup', function() {
    tablaDatos.columns(0).search($(this).val()).draw();
    });

  // Filtro por nombre
  $('#filter-nombre').on('keyup', function() {
    tablaDatos.columns(1).search($(this).val()).draw();
});

// Filtro por apellido
$('#filter-apellido').on('keyup', function() {
    tablaDatos.columns(2).search($(this).val()).draw();
});

// Filtro por correo
$('#filter-correo').on('keyup', function() {
    tablaDatos.columns(3).search($(this).val()).draw();
});

// Configuración de la paginación
tablaDatos.on('draw', function() {
    var info = tablaDatos.page.info();
    $('#pagination').html('Página ' + (info.page + 1) + ' de ' + info.pages);
});

$('#btn-previous').on('click', function() {
    tablaDatos.page('previous').draw(false);
});

$('#btn-next').on('click', function() {
    tablaDatos.page('next').draw(false);
});

});