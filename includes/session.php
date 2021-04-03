<?php
    session_start();

    $_SESSION["customercart"] = array(
        array(2,500,3), //Strawberry
        array(8,12,4), // Roma Tomatoes
        array(6,null,4) // Pumpkin, null format - over inventory
    );


?>