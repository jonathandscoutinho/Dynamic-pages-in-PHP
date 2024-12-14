<?php
require_once "conecta.php";
$nome = $_POST["nome"];
$email = $_POST["email"];

$conn = Conecta();
$stmt = mysqli_prepare($conn, "INSERT INTO user (name, email) values (?,?)");
mysqli_stmt_bind_param($stmt, "ss", $nome, $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

header("location:index.php");
