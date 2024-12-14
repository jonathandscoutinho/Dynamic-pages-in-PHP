<?php

function conecta(){
    $conn = mysqli_connect("localhost", "root", "", "");
    return $conn;
}