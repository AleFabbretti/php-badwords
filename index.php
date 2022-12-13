<?php
$text="Correva l&#39; anno 1994 quando Rasmus Lerdorf, giovane programmatore groenlandese, ipotizzò un nuovo linguaggio di programmazione per rendere le pagine web più dinamiche: l&#39 8 giugno 1995 presentò la prima versione di PHP .";
$word = $_GET['PHP'];
$text2 = str_replace($word, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- stampa paragrafo e lunghezza per intero -->
    <p><?php echo $text ?></p>
    <h4>Lunghezza:<?php echo strlen($text); ?></h4>

    <!-- stampa paragrafo con parola censurata -->
    <p><?php echo $text2 ?></p>
    <h4>Lunghezza: <?php echo strlen($text2); ?></h4>
</body>
</html>