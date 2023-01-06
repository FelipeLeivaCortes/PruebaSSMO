
/**
 * This function register an user
 * 
 * @returns 
 */
function register()
{

    /**
     * Checking all inputs required
     */
    if ( $('#rut').val() == '' ) {
        Swal.fire('Error', 'Ingrese rut del funcionario', 'error');
        return;
    }

    if ( $('#name').val() == '' ) {
        Swal.fire('Error', 'Ingrese nombre del funcionario', 'error');
        return;
    }

    if ( $('#address').val() == '' ) {
        Swal.fire('Error', 'Ingrese dirección del funcionario', 'error');
        return;
    }

    if ( $('#birthday').val() == '' ) {
        Swal.fire('Error', 'Ingrese fecha de nacimiento del funcionario', 'error');
        return;
    }

    if ( $('#state').val() == null ) {
        Swal.fire('Error', 'Seleccione estado del funcionario', 'error');
        return;
    }

    /**
     * Encoding data
     */
    var data    = new FormData();
    data.append('rut', $('#rut').val());
    data.append('name', $('#name').val());
    data.append('address', $('#address').val());
    data.append('birthday', $('#birthday').val());
    data.append('state', $('#state').val());


    $.ajax({
        url:            'services/register.php',
        type:           'POST',
        data:           data,
        dataType:       'json',
        cache:          false,
        processData:    false,
        contentType:    false

    }).fail(function(error) {
        console.log(error);
        Swal.fire('Error', 'Se ha producido un error con el servicio "register.php"', 'error');
    
    }).done(function(res) {
      //  console.clear();
        console.log(res);

        if ( res.error ) {
            Swal.fire('Error', res.msg, 'error');
            return;
        }

        Swal.fire('Operación Exitosa', res.msg, 'success');
    });
}