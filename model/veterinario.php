<?php
    namespace Clinica\Projeto\php;

    class veterinario{
        //Atributo é private = Encapsulamento
        private int $codigo;
        private string $nome;
        private string $telefone;
        private float $salario;
        private string $endereco;

        public function __construct(){
            $this->$codigo = "0";
            $this->$nome = "";
            $this->$telefone = "";
            $this->$salario = "0";
            $this->$endereco = "";
        }//fim do construtor

        public function __get(string $dado):mixed{
            return $this->$dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void{
            $this->$variavel = $novoDado;
        }//fim do set

        public function imprimir():string{
            return "<br>Código ".$this->codigo;
            return "<br>Nome ".$this->nome;
            return "<br>Telefone ".$this->telefone;
            return "<br>Salário ".$this->salario;
            return "<br>Endereço ".$this->endereco;
        }//fim do método Imprimir
    }//fim da classe
?>