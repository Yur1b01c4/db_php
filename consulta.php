<?php

require './db/conexao.php';

$sql = "SELECT * FROM pessoa ORDER BY NOME";
$stmt = $con->prepare($sql); // Nomeei a variável como $stmt para clareza (statement)

// Executa a consulta
$stmt->execute(); 

// Obtém o resultado da execução em um objeto mysqli_result
$resultado = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/table.css">
    <title>Consulta</title>
</head>
<body>
<main>
    <?php if($resultado->num_rows > 0) : ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php while($linha = $resultado->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $linha['NOME'];?></td>
                    <td><?php echo $linha['IDADE'];?></td>
                    <td><?php echo $linha['EMAIL'];?></td>
                </tr>
            <?php endwhile ?>      
        </tbody>
    </table>
    <?php else : ?>
        <p>Nenhum registro encontrado</p>
    <?php endif; ?>
</main>

</body>
<?php 
// Libera a declaração e fecha a conexão com o banco de dados
$stmt->close();
$con->close(); 
?>

<script>
    $('.button, .close').on('click', function(e) {
  e.preventDefault();
  $('.detail, html, body').toggleClass('open');
});
</script>

</html>