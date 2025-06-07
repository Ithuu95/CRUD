<?php
    include_once "../factory/conexao.php";
    $id = $_POST['cxcod'];
    $nome = $_POST['cxnome'];
    $idade = $_POST['cxidade'];
    $email = $_POST['cxemail'];

    $alterar = " 
                UPDATE tbcliente SET 
                nome = '$nome',
                idade = '$idade',
                email = '$email'
                where
                codigo = '$id'
                
    
    ";

    $executar = mysqli_query($conn,$alterar);
    if($executar){
        echo"
            <script>
                alert('Alterar com sucesso!');
                document.location.href='../view/cadcliente.php';
            </script>
        ";
    }
    else{
        echo "Cliente não alterado, erro no banco";
    }
?>
