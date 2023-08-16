<?php 
    //double quoted
        // "Curso" 
        echo "PHP\u{1F418}" ."<br>";     
    //single quoted
        // 'Curso'
        echo 'PHP\u\[1F418}' . "<br>";
    //Heredoc
        $canal = "Curso em Vídeo";
        $ano = date("Y");
        echo <<< FRASE
            Olá Eu do Futuro,
                    Você já aprendeu PHP?
                Você começou com o $canal
                Lembra? Em 2023?
                Agora já é $ano

        FRASE;
    //Nowdoc- não contém interpretação

    
?>