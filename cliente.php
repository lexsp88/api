<?php

include_once 'db.php';


class cliente extends DB {

    function obtenerCliente(){

    $query = $this->conectar()->query('select * from clientes');

    return $query;
}


}


?>
