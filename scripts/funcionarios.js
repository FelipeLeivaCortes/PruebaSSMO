
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
    // if ( $('#rut').val() == '' ) {
    //     swal('Error', 'Ingrese rut del funcionario', 'error');
    //     return;
    // }

    // if ( $('#name').val() == '' ) {
    //     swal('Error', 'Ingrese nombre del funcionario', 'error');
    //     return;
    // }

    // if ( $('#address').val() == '' ) {
    //     swal('Error', 'Ingrese dirección del funcionario', 'error');
    //     return;
    // }

    // if ( $('#birthday').val() == '' ) {
    //     swal('Error', 'Ingrese fecha de nacimiento del funcionario', 'error');
    //     return;
    // }

    // if ( $('#state').val() == null ) {
    //     swal('Error', 'Seleccione estado del funcionario', 'error');
    //     return;
    // }

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
        cache:          false,
        processData:    false,
        contentType:    false

    }).fail(function(error) {
        console.log(error);
        swal('Error', 'Se ha producido un error con el servicio "register.php"', 'error');
    
    }).done(function(res) {
      //  console.clear();
        console.log(res);

        if ( res.error ) {
            swal('Error', res.msg, 'error');
            return;
        }

        swal('Operación Exitosa', res.msg, 'success');
    });
}