<?php
    $array = array("sakine", "mazlomyar", 22);
    header("Content-Type: application/json");
    echo json_encode($array);
?>