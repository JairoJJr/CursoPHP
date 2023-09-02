<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["num"] ?? 0;
            $a = $n -1;
            $s = $n +1;
            echo "<p>O número antecessor ao $n é $a<p>";
            echo "<p>O Número sucessor ao $n é $s<p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p> 
    </main>
    
</body>
</html>