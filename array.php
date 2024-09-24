<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Instrumentos de Corda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }

        .border {
            background-color: #1e1e1e;
            border-color: #343a40;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        hr {
            border-color: #495057;
        }

        .container {
            padding: 20px;
        }

        .rounded {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container px-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="border p-5 rounded">
            <?php
            $instrumentos = array("violão", "guitarra", "baixo", "harpa", "banjo", "cavaquinho");

            // Verifica se o instrumento "banjo" está no array
            $existe = in_array("banjo", $instrumentos);
            echo "O instrumento 'banjo' está no array? " . ($existe ? 'Sim' : 'Não') . "<hr>";

            array_push($instrumentos, "ukulele", "viola");
            echo "Instrumentos após adicionar 'ukulele' e 'viola': <br>";
            print_r($instrumentos);
            echo "<br><hr>";

            sort($instrumentos);
            echo "Array 'instrumentos' em ordem alfabética: <br>";
            print_r($instrumentos);
            echo "<br><hr>";

            $removido = array_pop($instrumentos);
            echo "Instrumento removido do final: $removido <br>";
            echo "Array 'instrumentos' após remoção: <br>";
            print_r($instrumentos);
            echo "<br><hr>";

            $dividido = array_chunk($instrumentos, 3);
            echo "Array 'instrumentos' dividido em duas partes: <br>";
            print_r($dividido);
            echo "<br><hr>";
            ?>
        </div>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
