<?php
include ('datosConexion.php');

class DB {


public function conectar() {
    $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s", 
    SERVER, 
    PUERTO, 
    DBNAME, 
    USER, 
    PASS);

    $pdo = new PDO($conStr);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}
}
?>