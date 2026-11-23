<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;

    class Atualizar{
        public function atualizarVeterinario(Conexao $conexao, int $codigo, string $campo, string $novoDado){
            try{
                $conn = $conexao ->conectar();//Conectando com o BD
                $slq = "update veterianario set $campo = 'novoDado' where codigo = '$codigo'";
                $result = mysql_query($conn,$sql);

                if($result){
                    return "<br><br>Dado atualizado com sucesso!";
                }
                return "<br><br>Não atualizado!";

            }catch(exception $erro){
                echo "<br><br>Algo deu errado!<br>$erro";
            }
        }//fim do método Atualizar
    }//fim da classe
?>