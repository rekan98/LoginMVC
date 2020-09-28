<?php
include 'config.php';
    try {
        $dsn = "mysql:host=".SERVIDOR.";port=3307;dbname=".BD;
        $pdo = new PDO($dsn, USER, PASSWD);
        echo "<script> alert('conexion establecida')</script>";
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>