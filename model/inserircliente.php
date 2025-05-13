<?php
    if($_POST['cxnome'] !=""){
        include_once "../factory/conexao.php";
        $nome = $_POST ["cxnome"];
        $email = $_POST ["cxemail"];
        $idade = $_POST ["cxidade"];

        $inserir = "insert into tbcliente (nome,email,idade)values('$nome','$email','$idade')";
        $query = mysqli_query($conn, $inserir);
        echo"
            <script>
            alert('Dados cadastrado com Sucesso');
            window.document.href = '../view/cadcliente.php';
            </script>
        ";
    }else{
        echo "Dados não cadastrado";
    }
?>