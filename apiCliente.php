<?php

include_once 'cliente.php';


class apiJuca{

    function getAllClientes(){
        $cliente = new Cliente();
        $clientes = array ();
        $clientes["items"] = array();

        $res = $cliente->obtenerCliente();

        if($res -> rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){

                $item = array(
                    'id' => $row['id_cliente']
                );
                array_push($clientes['items'],$item);

                echo json_encode(array($clientes));
            }

            

        } else {

            echo json_encode(array('mensaje' => 'No hay elementos registrados'));

        }
    }


}
?>
