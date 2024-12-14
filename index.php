<?php
require_once "conecta.php";
    $conn = conecta();
    $stmt = mysqli_prepare($conn, "SELECT * FROM user");
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $html = "";
    while ($linha = mysqli_fetch_array($result)) {
        $html .= "<tr><td>{$linha['name']}</td><td>{$linha['email']}</td></tr>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="envia.php" method="post" accept-charset="utf-8">
        <input type="text" id="nome" name="nome">
        <input type="text" id="email" name="email">
        <input type="submit" value="Enviar">
    </form>
</body>
<br><br><br>
<table>
    <caption>Table de usuários</caption>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $html ?>
    </tbody>
</table>
</html>