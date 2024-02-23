<?php 

    $word = $_GET['censored-word'];
    $sentence = $_GET['user-input'];

    // ciclo for che aggiunge * al posto della parola
    $censored_word = '';
    for ($i = 0; $i < strlen($word); $i++) {
        $censored_word = $censored_word.'*';
    };

    $censored_sentence = str_replace($word, $censored_word, $sentence);

?>

<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PHP Badwords</title>
    <link rel="icon" href="./imgs/logo-small.ico">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-5">

        <h2 class="fw-bold my-4 text-danger">
            <?php echo $censored_sentence ?>
        </h2>

        <?php
            echo 'La frase originale è: ', var_dump($sentence);
        ?> 
            
        <div                                                        >
            <?php 
                echo "La parola censurata è: ", var_dump($word);
            ?>
        </div>

    </div>

</body>
</html>