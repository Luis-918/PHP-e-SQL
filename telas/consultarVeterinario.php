<?php
    namespace Clinica\Projeto\Telas;

    require_once('../DAO/conexao.php');
    require_once('../DAO/consultar.php');

    use Clinica\Projeto\DAO\Conexao;
    use Clinica\Projeto\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();
    $Mensagem = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Veterinário</title>
</head>
<body>
    <h1>Consultar Veterinário</h1>
    <form method ="POST">
        <label>Informe o código que deseja procurar</label>
        <input type="text" id="codigo" name="codigo"/>

        <button type="submit ">Consultar
            <?php
                if(isset($_POST['codigo'])){
                    $mensagem = $consultar->consultarVeterinario($conexao, $_POST['codigo']);
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
    <button><a href="telas/index.php">Voltar</a></button>
</body>
</html>