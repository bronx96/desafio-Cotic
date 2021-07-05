<?php
if(isset($_GET["nomeper"])) {
    $nome = $_GET["nomeper"];
    echo $nome;
}
$hostname = "localhost"; //criando conexão com o banco de dados
$database = "desafio";
$usuario = "root";
$senha = "";
$com = mysqli_connect($hostname, $usuario, $senha, $database);

$data = "select * from personagens";
$dados= $com->query($data) or die($com->error);
$linha = $dados->fetch_assoc();
$total = mysqli_num_rows($dados);
?>
<html lang ="pt-br">
<head>
    <meta charset="utf-8">
    <title>Ola mundo</title>
</head>
<body>
<h1>
    testando php
</h1>
<table>
    <tr>
        <td>nome</td>
    </tr>
    <?php while($linha = $dados->fetch_assoc()){?>
        <tr>
            <td><?php echo $linha['nomeper'];?></td>
        </tr>
    <?php }?>
</table>

<?php
?>
</body>
</html>