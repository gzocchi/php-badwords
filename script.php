<?php
$censor = $_GET["censor"];
$text = "In una terra lontana, dietro le montagne Parole,
lontani dalle terre di Vocalia e Consonantia,
vivono i testi casuali. Vivono isolati nella
cittadina di Lettere, sulle coste del Semantico,
un immenso oceano linguistico. Un piccolo
ruscello chiamato Devoto Oli attraversa quei
luoghi, rifornendoli di tutte le regolalie di cui
hanno bisogno. È una terra paradismatica, un
paese della cuccagna in cui golose porzioni di
proposizioni arrostite volano in bocca a chi le desideri.";

$censoredText = str_replace($censor, "***", $text);
$textLength = strlen($censoredText);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>php-badwords</h1>
        <section class="original_text">
            <p><?php echo $censoredText ?></p>
            <p>Il paragrafo ha <?php echo $textLength ?> caratteri</p>
        </section>       
    </body>
</html>