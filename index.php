<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $paragraph = 'Quando si crea una pagina web occorre mettersi ndjhsg nei panni di chi dovrà leggerla, ossia dell\'utente o del lettore';

    // Una parola da censurare viene passata dall’utente tramite parametro GET.
    $wordReplace = $_GET['wrongWord'];

    var_dump($_GET['wrongWord']);

    
    // Stampare a schermo il paragrafo e la sua lunghezza.
    echo '<h1>Paragrafo non controllato </h1>' . '<h3> ' . $paragraph . ' </h3>';
    echo '<p>Lunghezza paragrafo:' . strlen($paragraph) . ' </p>';
    var_dump($paragraph);


    /* Stampare di nuovo il paragrafo e la sua lunghezza,
     dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.*/
    $paragraphModified = str_replace($_GET['wrongWord'], '***', $paragraph);

    echo '<h1>Paragrafo censurato </h1>' . '<h3> ' . $paragraphModified . ' </h3>';
    echo '<p>Lunghezza paragrafo:' . strlen($paragraphModified) . ' </p>';
    var_dump($paragraphModified);

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
    
</body>
</html>