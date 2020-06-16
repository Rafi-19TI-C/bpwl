<?php 

    $conn = new mysqli('localhost','root','','pmb');

    if ($conn -> connect_errno) {
        echo die("Gagal menghubungkan ke database".$conn->connect_error);
    }

?>