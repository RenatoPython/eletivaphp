<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercicio 9</h1>

            <?php
             try{
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular_area_circulo"])) {
                    $raio = $_POST["raio"];
                    $area = pi() * pow($raio, 2);
                    echo "<h3>Resultado: A área do círculo é " . number_format($area, 2) . "</h3>";
                }
            }catch (Exception$e){
                echo $e->getMessage();
            }
            ?>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>