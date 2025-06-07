<?php
    include_once "../factory/conexao.php";
    $nome = $_POST["cxpesquisa"];
    $consulta = "select *from tbcliente where nome = '$nome' ";
    $executar = mysqli_query($conn, $consulta);
    $campos = mysqli_fetch_array($executar);
?>

Nome:<br/>
<input type="text" value="<?php echo $campos['nome'];?>"/><br/>
E-mail:<br/>
<input type="text" value="<?php echo $campos['email'];?>"/><br/>
Idade:<br/>
<input type="text" value="<?php echo $campos['idade'];?>"/>

<br/>
<a href="teladealterarcliente.php?id=<?php echo $campos['codigo']?>">Alterar</a>
<a href="excluircliente.php?cod=<?php echo $campos['codigo']?>">Excluir</a>
