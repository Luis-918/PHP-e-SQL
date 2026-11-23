<?php
    namespace Clinica\Projeto\DAO;
    use Clinica\Projeto\DAO\Conexao;
    
    class Cadastrar{
        public function cadastrarVeterinario(Conexao $conexao, string $nome, string $telefone, float $salario, string $endereco){
            try{
                $conn = $conexao ->conectar();//Conectando com o BD
                $slq = "insert into Veterinario(codigo, nome, telefone, salario, endereco)
                    values('', '$nome', '$telefone', '$salario', '$endereco')";//Comando para o BD
                $result = mysql_query($conn,$sql);//Executar

                //Avisar o usuário
                if($result){
                    return "<br><br>Cadastro com sucesso!";
                }
                return "<br><br>Não Cadastrado";

            }catch(exception $erro){
                echo "<br><br>Algo deu errado!<br>$erro";
            }
        }//fim do método Cadastrar
    }//fim da classe
?>