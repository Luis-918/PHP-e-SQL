<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;

    class Excluir{
        public function excluirVeterinario(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao ->conectar();//Conectando com o BD
                $slq = "delete from veterinario where codigo = '$codigo'";
                $result = mysql_query($conn,$sql);

                if($result){
                    return "<br><br>Excluído com sucesso!";
                }
                return "<br><br>Não excluído!";

            }catch(exception $erro){
                echo "<br><br>Algo deu errado!<br>$erro";
            }
        }//fim do método Excluir
    }//fim da classe
?>