<?php
session_start();
foreach ($_SESSION['todo'] as $key => $value) {
    if($key == $_GET['id']){
        array_splice($_SESSION['todo'],$key,1);
    }
}
header("Location:tasks.php");die();


?>