<?php
    session_start();

    $_SESSION["customercart"] = array(
        array(2,250,3), //Wild blueberries
        array(8,12,4), // Roma Tomatoes
        array(6,null,4) // Pumpkin, null format - over inventory
    );


?>