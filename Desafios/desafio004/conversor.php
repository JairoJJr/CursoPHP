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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url =  'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio.'%27&@dataFinalCotacao=%27'. $fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $horadata = $dados["value"][0]["dataHoraCotacao"];

            $real = $_GET["real"];
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "O valor de <strong>". numfmt_format_currency($padrao,$real,"BRL") . "</strong> equivale a <strong>U\$" . number_format($dolar,2,",",".") ."<br><br></strong><center>Em $horadata</center>";
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>