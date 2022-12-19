<?php

$word = $_GET["codeWord"];
$phrases = $_GET["phraseEl"];


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>

    <main>


        <section>
            <div class="container py-5">

                <div class="py-3">
                    <h3>Il paragrafo da te scritto è:</h3>
                    <span> <?php echo $phrases ?> </span>
                </div>

                <div class="py-3">
                    <h4>La lunghezza del paragrafo è di:</h4>
                    <div><?php echo strlen($phrases) ?> </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container py-5">
                <h5>Paragrafo Criptato</h5>

                <div>
                    <p> <?php echo str_replace("$word", "***", $phrases) ?> </p>
                    <h6> Lunghezza: <?php echo strlen($phrases) ?> </h6>
                </div>
            </div>
        </section>
    </main>

</body>

</html>