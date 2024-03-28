<?php
    // include_once "./View/fruits.php";
    $act = "loai";
    //Contrller điều phối tới những view khác thông qua 1 biến tên là act
    if(isset($_GET['act'])){
        $act = $_GET['act']; //fruits
    }
    switch($act){
        case "vegetables":            
            include_once "./View/vegetables.php";
            break;
        case "fruits":
            include_once "./View/fruits.php";
            break;        
        case "juices":
            include_once "./View/juices.php";
            break;
        case "dried":
            include_once "./View/dried.php";
            break;
    }
?>