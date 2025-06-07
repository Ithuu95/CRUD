<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão</title>
</head>
<body>
    <h1>Sistema de Gestão</h1>
    <hr/>
    <form action="../model/inserircliente.php" method="POST">
        Nome:<br/>
        <input type="text" name="cxnome"/><br/>
        E-mail:<br/>
        <input type="text" name="cxemail"/><br/>
        Idade:<br/>
        <input type="text" name="cxidade"/><br/>
        <input type="submit" value="Gravar">
    </form>
    <hr/>
    <form action="../model/pesquisanome.php" method="POST">
    Digite o nome completo:<br/>
    <input type="text" name="cxpesquisa"/>
    <input type="submit" value="Pesquisar">
    </from>  
    
</body>
</html>
