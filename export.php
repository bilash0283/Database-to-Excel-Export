<?php 

    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; Filename = MyData.xls");

    require 'index.php';
?>