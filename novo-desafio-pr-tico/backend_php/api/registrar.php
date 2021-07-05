<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="utf-8">
    <title>Ola mundo</title>
</head>
<body>
<h1>
    testando php
</h1>
<?php
if (isset($_GET["nomeper"])) { //checando se pelo menos o campo nome foi adicionado
    $nomeper = $_GET["nomeper"]; //alocando os campos do lario para as devidas variaveis
    $idade = (int)$_GET["idad"];
    $nomeat = $_GET["nomeat"];
    $tipo = $_GET["tipo"];
    $biogra = $_GET["biogra"];

    $hostname = "localhost"; //criando conexão com o banco de dados
    $database = "desafio";
    $usuario = "root";
    $senha = "";
    $conn = mysqli_connect($hostname, $usuario, $senha, $database);
    echo 'conectado';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "INSERT INTO personagens (nome, idade, interprete, alinhamento, biografia) VALUES ('$nomeper', '$idade', '$nomeat','$tipo', '$biogra')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
header("location:http://localhost/novo-desafio-pr-tico/pages/formulario.html");
?>
</body>
</html>


