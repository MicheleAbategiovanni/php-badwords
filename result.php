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
</head>

<body>

    <main>


        <section>
            <div class="container">

                <div>
                    <h2>Il paragrafo da te scritto è:</h2>
                    <p> <?php echo $phrases ?> </p>
                </div>

                <div>
                    <h4>La lunghezza del paragfrafo è di:</h4>
                    <div><?php echo strlen($phrases) ?> </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

            </div>
        </section>
    </main>

</body>

</html>