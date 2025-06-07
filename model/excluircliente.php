<?php
    include_once "../factory/conexao.php";
    $codigo = $_GET['cod'];
    $excluir = "delete from tbcliente where codigo = '$codigo'";
    $executar = mysqli_query($conn, $excluir);
    if($executar){
        echo "
            <script>
                alert('Cliente excluido com sucesso!');
                window.location.href='../view/cadcliente.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Cliente não excluido, fazer nova pesquisa');
            </script>
        ";
    }
?>
