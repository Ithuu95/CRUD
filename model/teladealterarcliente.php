<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão para alteira cliente</title>
</head>
<body>
    <?php
        include_once "../factory/conexao.php";
        $cod = $_GET["id"];
        $consulta = "select *from tbcliente where codigo = '$cod'";
        $executar = mysqli_query($conn, $consulta);
        $campos = mysqli_fetch_array($executar);
    ?>
    <form action="alterarcliente.php" method="POST"> 
        codigo:<br/>
        <input type="text" value="<?php echo $campos['codigo'] ?>" name="cxcod"/><br/>
        Nome:<br/>
        <input type="text" value="<?php echo $campos['nome'] ?>" name="cxnome"/><br/>
        Idade:<br/>
        <input type="text" value="<?php echo $campos['idade'] ?>" name="cxidade"/><br/>
        E-mail:<br/>
        <input type="text" value="<?php echo $campos['email'] ?>" name="cxemail"/><br/>
        <input type="submit" value="Alterar">
    </form>
</body>
</html>
