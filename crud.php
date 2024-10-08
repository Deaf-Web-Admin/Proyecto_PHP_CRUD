<?php

    include "conn.php";
	$conexion = new mysqli($servidor, $usuario, $password, $database);
    $Operation = $_REQUEST["o"];
    $Identity = $_REQUEST["id"];
    $FirstName = $_REQUEST["first"];
    $LastName = $_REQUEST["last"];
    $eMail = $_REQUEST["email"];
    $Gender = $_REQUEST["gender"];
    $Phone = $_REQUEST["phone"];

    //o = 1(delete) 2(create) 3(update)
    //id = id of the table field 
    if ($Operation=="1"){
        mysqli_query($conexion, "DELETE FROM MOCK_DATA WHERE id='".$Identity."'");
        header('Location:index.php');
    }
    if ($Operation=="2"){
        mysqli_query($conexion, "INSERT INTO MOCK_DATA (first_name, last_name, email, gender, phone) VALUES ('".$FirstName."','".$LastName."','".$eMail."','".$Gender."','".$Phone."');");
        header('Location:index.php');
    }
    if ($Operation=="3"){
        mysqli_query($conexion, "UPDATE MOCK_DATA SET first_name='".$FirstName."',  last_name='".$LastName."', email='".$eMail."', gender='".$Gender."', phone='".$Phone."' WHERE id='".$Identity."'");
        header('Location:index.php');
        //UPDATE `MOCK_DATA` SET `first_name` = 'Adell', `last_name` = 'Klampp', `email` = '1aklamp0@addtoany.com', `phone` = '416-396-06666' WHERE `MOCK_DATA`.`id` = 1
    }
?>