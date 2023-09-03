<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covertido em Dólar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $real = $_GET["real"];
            $dolar = $real / 4.95;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "O valor de <strong>". numfmt_format_currency($padrao,$real,"BRL") . "</strong> equivale a <strong>U\$" . number_format($dolar,2,",",".") ."<br></strong>";
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>