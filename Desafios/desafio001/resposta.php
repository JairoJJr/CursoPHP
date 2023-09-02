<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado do processamento</h1>
        <?php 
            $n = $_GET["num"] ?? 0;
            $a = $n -1;
            $s = $n +1;
            echo "<p>O número antecessor ao $n é $a<p>";
            echo "<p>O Número sucessor ao $n é $s<p>"
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar para página anterior</button></p> 
    </main>
    
</body>
</html>