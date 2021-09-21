<?php
    include_once("conexao.php");
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    
    $result_usuario = "SELECT usuario, senha FROM usuarios WHERE usuario = '$usuario' && senha = '$senha'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
               
                     echo "logado";
                      
                     
                     
  
                  
            }else{
                
                  
                   
                     header("Location: login.php");
                   
            }
?>