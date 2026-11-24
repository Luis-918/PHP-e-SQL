<?php
    namespace Clinica\Projeto\Telas;

    require_once('../DAO/conexao.php');
    require_once('../DAO/atualizar.php');

    use Clinica\Projeto\DAO\Conexao;
    use Clinica\Projeto\DAO\Atualizar;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $Mensagem = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Veterinário</title>
</head>
<body>
    <h1>Atualizar Veterinário</h1>
    <form method ="POST">
        <label>Código: </label>
        <input type="text" id="codigo" name="codigo"/><br><br>


        <label>Escolha uma das opções abaixo: </label>
        <select id="campo" name="campo">
            <option value ="nome">Nome</option>
            <option value ="telefone">Telefone</option>
            <option value ="salario">Salário</option>
            <option value ="endereco">Endereço</option>
        </select><br><br>

        <label>Novo Dado: </label>
        <input type="text" id="novoDado" name="novoDado"/>
        
        <button>Atualizar
            <?php
                if(isset($_POST['codigo'])){
                    $codigo = $_POST['codigo'];
                    $campo = $_POST['campo'];
                    $novoDado = $_POST['novoDado'];

                    $mensagem = $consultar->atualizarVeterinario($conexao, $codigo, $campo, $novoDado);
                }
            ?>
        </button>
    </form>
    <?php
         if(isset($_POST['codigo'])){
            echo $mensagem;
         }else{
            echo "Preencha os campos!";
         }
    ?>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>