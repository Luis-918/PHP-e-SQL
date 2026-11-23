<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;

    class Consultar{
        public function consultarVeterinario(Conexao $conexao, string $nome, string $telefone, float $salario, string $endereco){
            try{
                $conn = $conexao ->conectar();//Conectando com o BD
                $slq = "select * from veterinario where codigo = '$codigo'";
                $result = mysql_query($conn,$sql);

                //Buscar o dado no banco
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $codigo){
                        return "<br>Código: ".$dados['codigo'].
                                "<br>Código: ".$dados['nome'].
                                "<br>Código: ".$dados['telefone'].
                                "<br>Código: ".$dados['salario'].
                                "<br>Código: ".$dados['endereco'];
                    }//fim do if
                }//fim do while

            }catch(exception $erro){
                echo "<br><br>Algo deu errado!<br>$erro";
            }
        }//fim do método Consultar
    }//fim da classe
?>