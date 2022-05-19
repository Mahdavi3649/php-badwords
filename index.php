<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, eius.";
//var_dump($text);
//var_dump(strlen($text));


//parola passata dall'utente tramite parametro GET.
$wordSearch = $_GET['word'];
//var_dump($wordSearch);
$change_word = str_replace($_GET['word'], "***", $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head> 
    <style>
    body {background-color: #DAF7A6;}
    h5   {color: blue;}
    </style>
<body>


<!-- Stampare a schermo il paragrafo e la sua lunghezza.-->
<h4><?php echo $text; ?></h4>
<h5>La lunghezza: <?php echo strlen($text); ?></h5>

<h4><?php echo $change_word; ?></h4>
<h5>La lunghezza: <?php echo strlen($change_word); ?></h5>


    
</body>
</html>