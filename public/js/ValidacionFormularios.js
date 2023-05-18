

//Funcion para mostrar imagen dinamicamente
function mostrarImagenSeleccionada(event) {
    var input = event.target;
    var vista_previa = document.getElementById('vista-previa');
    var reader = new FileReader();
    reader.onload = function(){
        vista_previa.src = reader.result;
        vista_previa.style.display = 'block';
    };
    reader.readAsDataURL(input.files[0]);
}

//Funcion para validar campos vacios
function validarCamposVacios() {
    const nombreInput = document.querySelector('#nombre');
    const telefonoInput = document.querySelector('#telefono');
    const correoInput = document.querySelector('#correo');
    const verificacionCorreoInput = document.querySelector('#verificacion_correo');

    if (nombreInput.value == '' || telefonoInput.value == '' || correoInput.value == '' || verificacionCorreoInput.value == '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, complete todos los campos.',
            })
        return false;
    }
    return true;
}

//Funcion para validar correos
function validarCorreos() {
    if (validarCamposVacios() == false) {
        return false;
    }
    const correoInput = document.querySelector('#correo');
    const verificacionCorreoInput = document.querySelector('#verificacion_correo');
    if (correoInput.value !== verificacionCorreoInput.value) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Los correos no coinciden. Por favor, verifíquelos.',
            })
        return false;
    }
    return true;
} 

//Funcion para validar campos en el formulario de Actualizar Contraseña

function ValidacionPW() {
    var passwordNueva = document.getElementById("password_nueva").value;
    var verificacionPasswordNueva = document.getElementById("verificacion_password_nueva").value;
    //var passwordActual = document.getElementById("password_actual").value;
    
    if (passwordNueva == ""     || verificacionPasswordNueva == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, complete todos los campos.',
            })
        return false;
    }
    if (passwordNueva.length < 8) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'La nueva contraseña debe tener al menos 8 caracteres.',
            })
        return false;
    }
    if (password_nueva.value != verificacion_password_nueva.value) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Las contraseñas no coinciden.',
            })
        return false;
    }
    
    return true;
}

//Funcion para validar campos en el formulario de Publicar Producto
function validarFormularioPublicar() {
    
    var nombre = document.getElementById("nombre").value;
    var descripcion = document.getElementById("descripcion").value;
    var cantidad = document.getElementById("cantidad").value;
    var precio = document.getElementById("precio").value;
    var categoria = document.getElementById("categoria").value;
    var imagen = document.getElementById("imagen").value;
    
    if (nombre === "" || descripcion === "" || cantidad === "" || precio === "" || categoria === "" || imagen === "") { 
      Swal.fire({  
        icon: 'error',
        title: 'Oops...',
        text: 'Por favor, complete todos los campos.',
      })
      return false;
    }
    /*const validos = /^[A-Za-z0-9\s.,-]+$/;*/


    if(nombre.length < 4){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, ingresa un nombre válido de al menos 4 caracteres.',
        });
        return false;
    }
    

    if(descripcion.length < 4){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, ingresa una descripción válida.',
          });
          return false;
    }
    if (parseFloat(cantidad) <= 0) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'La cantidad debe ser mayor a 0.',
      })
      return false;
    }
    
    if (parseFloat(precio) <= 0) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El precio debe ser mayor a 0.',
      })
      return false;
    }
    
   
    return true;
  }

  function validarFormularioEditarP() {
    
    var nombre = document.getElementById("nombre").value;
    var descripcion = document.getElementById("descripcion").value;
    var cantidad = document.getElementById("cantidad").value;
    var precio = document.getElementById("precio").value;
    var categoria = document.getElementById("categoria").value;
    
    if (nombre === "" || descripcion === "" || cantidad === "" || precio === "" || categoria === "" ) { 
      Swal.fire({  
        icon: 'error',
        title: 'Oops...',
        text: 'Por favor, complete todos los campos.',
      })
      return false;
    }
    /*const validos = /^[A-Za-z0-9\s.,-]+$/;*/


    if(nombre.length < 4){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, ingresa un nombre válido de al menos 4 caracteres.',
        });
        return false;
    }
    

    if(descripcion.length < 4){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, ingresa una descripción válida.',
          });
          return false;
    }
    if (parseFloat(cantidad) <= 0) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'La cantidad debe ser mayor a 0.',
      })
      return false;
    }
    
    if (parseFloat(precio) <= 0) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El precio debe ser mayor a 0.',
      })
      return false;
    }
    
   
    return true;
  }
 
  function validarFormularioDireccion() {
    var numeroDeCalle = document.getElementById("numeroDeCalle").value;
    var barrio = document.getElementById("barrio").value;
    var comunaSector = document.getElementById("comuna_sector").value;
    var ciudad = document.getElementById("ciudad").value;
    var departamentoProvincia = document.getElementById("departamento_provincia").value;
    var pais = document.getElementById("pais").value;
  
    if (
      numeroDeCalle === "" || barrio === "" || ciudad === "" || departamentoProvincia === "" || pais === ""
    ) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Por favor, complete todos los campos.',
      })
      return false;
    }
  
    var regex = /^[a-zA-Z\s]*$/;
    if (!regex.test(barrio) || !regex.test(comunaSector) || !regex.test(ciudad) 
        || !regex.test(departamentoProvincia) || !regex.test(pais)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Los campos no deben contener números, excepto "Número de calle".',
                });
            return false;
    }
  
    return true;
  }
  



//Guardar elementos necesarios para las verificaciones  
const form = document.querySelector('#formulariodatos');
const imagenInput = document.querySelector('#imagen');
const formpw = document.querySelector('#formulariopw');
const formpublicar = document.querySelector('#formulariopublicar');
const formeditar = document.querySelector('#formularioeditar');
const formdireccion = document.querySelector('#formulariodireccion');


//Eventos con funciones para ver si existen en el formulario y asi evitar errores
if (form) {
    form.addEventListener('submit', (event) => {
        if (validarCorreos() == false) {
            event.preventDefault();
        }
        else {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas guardar los cambios?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, guardar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
});
}
if (imagenInput) {
    imagenInput.addEventListener('change', mostrarImagenSeleccionada);
}
if (formpw) { 
    formpw.addEventListener('submit', (event) => {
        if (ValidacionPW() == false) {
            event.preventDefault();
        }
        else {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas cambiar la contraseña?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cambiarla'
            }).then((result) => {
                if (result.isConfirmed) {
                    formpw.submit();
                }
            });
        }
    });
}

if (formpublicar) {
    formpublicar.addEventListener('submit', (event) => {
        if (validarFormularioPublicar() == false) {
            event.preventDefault();
        }
        else {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas publicar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',  
                confirmButtonText: 'Sí, publicarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    formpublicar.submit();
                }
            });
        }
    });
}

if (formeditar) {
    formeditar.addEventListener('submit', (event) => {
        if (validarFormularioEditarP() == false) {
            event.preventDefault();
        }
        else {
            event.preventDefault();
            Swal.fire({
                title: '¿Confirmar Cambios?',
                text: '¿Estas Seguro de Realizar los cambios?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',  
                confirmButtonText: 'Sí, Guardar Cambios'
            }).then((result) => {
                if (result.isConfirmed) {
                    formeditar.submit();
                }
            });
        }
    });
}

if (formdireccion) {
    formdireccion.addEventListener('submit', (event) => {
        if (validarFormularioDireccion() == false) {
            event.preventDefault();
        }
        else {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas guardar la dirección?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',  
                confirmButtonText: 'Sí, guardarla'
            }).then((result) => {
                if (result.isConfirmed) {
                    formdireccion.submit();
                }
            });
        }
    });
}