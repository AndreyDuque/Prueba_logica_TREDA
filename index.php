<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prueba Logica TREDA</title>
</head>

<body>

    <div class="container">
        <!-- Punto uno  -->
        <div>
            <h1>Prueba Logica TREDA</h1>
            <p>1. Dado un número n encontrar todos los múltiplos de 3 y 5 menores al número dado, el método debe retornar la suma de los múltiplos encontrados. Ejemplo: si el número ingresado es 10, los múltiplos de 3 y 5 menores a 10 son: 3, 5, 6, 9, el resultado de la función debe ser 23, debido a que es la suma de 3, 5, 6, 9.</p>
        </div>

        <form action="./index.php" method="POST">
            <div class="mb-3">
                <h3>Calcular la suma de los multiplos</h3>
                <label>Ingrese un numero entero</label>
                <input type="number" name="number">
                <button type="submit">CALCULAR</button>
            </div>
        </form>
        <div>
            <?php

            $max = $_POST['number'];
            $i = 0;

            $multiplos = array();

            while ($i < $max) {
                if ($i % 3 == 0 || $i % 5 == 0) {
                    array_push($multiplos, $i);
                }
                $i++;
            }

            $suma = 0;
            foreach ($multiplos as $xxx) {
                $suma = $suma + $xxx;
            }

            echo "La suma de los multiplos encontrados es de: ";
            echo $suma;
            ?>
        </div>

        <!-- Punto dos -->
        <div>
            <p>2. Dado un string separado por espacios, guiones y guiones bajos. Se debe implementar una función camel case que transforme la oración. Ejemplos
                a. Dado “Bienvenido a_Treda-solutions” retornar “BienvenidoATredaSolutions”
                b. Dado “0,” retornar “bienvenidoATredaSolutions”
            </p>
        </div>
        <form action="./index.php" method="POST">
            <div>
                <h3>Función Camel Case</h3>
                <label for="">Ingrese el texto</label>
                <input type="text" name="texto">
                <button type="submit">CONSULTAR</button>
            </div>
        </form>
        <div>
            <?php

            $str = $_POST['texto'];
            $str2 = str_replace("_", " ", $str);
            $str3 = str_replace("-", " ", $str2);
            $str4 = ucwords($str3);
            $str5 = str_replace(" ", "", $str4);

            echo "Camel Case: ";
            echo $str5;
            ?>
        </div>

        <!-- Punto tres  -->
        <div>
            <p>3. Dada una frase, devolver la frase donde las palabras con mayor a 5 letras esten al revés. Ejemplos
                a. Dado “Bienvenido a Treda Solutions” retornar “odinevneiB a Treda snoituloS”
            </p>
        </div>
        <form action="./index.php" method="POST">
            <div>
                <h3>Palabras contrarias</h3>
                <label for="">Ingrese la frase</label>
                <input type="text" name="frase">
                <button type="submit">CONSULTAR</button>
            </div>
        </form>
        <div>
            <?php

            $frase = $_POST['frase'];
            $arrayPalabras = str_word_count($frase, 2);

            foreach ($arrayPalabras as $palabra) {
                if (strlen($palabra) > 5) {
                    $frase = str_replace($palabra, strrev($palabra), $frase);
                }
            }

            echo "Resultado de la frase: ";
            echo $frase;
            ?>
        </div>
    </div>

</body>

</html>