<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $imagem = $_FILES['img'];
    
    $result_usuario = "INSERT INTO usuarios (nome, email, senha, foto, sexo, usuario ) VALUES ('$nome','$email','$senha','$imagem','$sexo','$usuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    
                    O Usuario foi cadastrado com Sucesso.
                ";   
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web/register.php'>
                    O Usuario não foi cadastrado com Sucesso.
                ";    
            }
?>