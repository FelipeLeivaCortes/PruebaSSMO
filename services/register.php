<?php
    require_once 'connection.php';

    $mysqli = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE, 3306);

    if ($mysqli->connect_errno) {
        $RESPONSE['error']  = true;
        $RESPONSE['msg']    = "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        $RESPONSE['data']   = array();
        
        echo json_encode($RESPONSE); 
        exit();
    }


    $stmt   = $mysqli->prepare("INSERT INTO funcionarios ('rut_funcionario', 'nombre_funcionario', 'direccion_funcionario',
                                'fecha_nacimiento', 'estado_funcionario') VALUES (?, ?, ?, ?, ?);");
    $stmt->bind_param('ssssb', $_POST['rut'], $_POST['name'], $_POST['address'], $_POST['birthday'], boolval($_POST['state']));

    if (  $stmt->execute() ) {
        $RESPONSE['error']  = false;
        $RESPONSE['msg']    = 'Se ha registrado el funcionario exitosamente';
    
    } else {
        $RESPONSE['error']  = true;
        $RESPONSE['msg']    = 'Se ha registrado el funcionario exitosamente';

    }

    $RESPONSE['data']   = array();

    echo json_encode($RESPONSE);
        
    $mysqli->close();
?>