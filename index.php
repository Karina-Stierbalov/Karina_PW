<?php   

$local= "localhost";
$login= "root";
$senha= "";
$banco= "banco";

$abrir_porta = mysqli_connect($local, $login, $senha, $banco);

if (!$abrir_porta) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$query = "SELECT * FROM Alunos";
$resposta = mysqli_query($abrir_porta, $query);

if (mysqli_num_rows($resposta) > 0) {
    while ($info_do_banco = mysqli_fetch_array($resposta)) {
        echo "NOME: " . $info_do_banco["nome_aluno"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

mysqli_close($abrir_porta);
?>
