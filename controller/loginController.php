<?php 
    include '../model/user.php';
    include '../model/conexion.php';
    $femail = $_POST ['femail'];
    $passwd = $_POST ['passwd'];
   // echo "el email es: {$femail} y la contraseña es: {$fpassword}";

   //Crear el objeto User a traves de la clase con los dos valores email y passwd
   $user= new User($femail,$passwd);
   echo $user->getEmail();
   echo "<br>";
   echo $user->getPasswd();
   $sql= "SELECT * FROM tbl_user WHERE email=? AND passwd=?";
   $smt=$pdo->prepare ($sql);
   $smt->bindParam(1, $femail);
   $smt->bindParam(2, $passwd);
   $smt->execute();
   $numUser=$smt->rowCount();
   echo $numUser;
?>