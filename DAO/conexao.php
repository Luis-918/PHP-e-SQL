<?php
    namespace Clinica\Projeto\DAO;

    class conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','', 'clinica');
                if($conn){
                    echo "Conectado!";
                    return $conn;
                }else{
                    echo "Conexão Falhou!";
                }
            }catch(exception $erro){
                echo "<br><br>Algo deu errado!<br>".$erro;
            }
        }//fim do método Conectar
    }//fim da classe
?>