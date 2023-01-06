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

    $result = $mysqli->query("SELECT * FROM funcionarios;");
    $row    = $result->fetch_array(MYSQLI_NUM);

    if ($row) {
        $RESPONSE['error']  = false;
        $RESPONSE['msg']    = 'Se ha registrado el funcionario exitosamente';
        $RESPONSE['data']   = $row;
        
        echo json_encode($RESPONSE); 
        
        $result->free();
        $mysqli->close();

        exit();
    }

?>