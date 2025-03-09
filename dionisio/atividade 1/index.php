<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<main class="container my-5"> 
<h1 class="display-3 text-center"> Aula - Variaveis</h1>
<hr>

<?php


echo "<div class='bg-dark text white py-1 px-3 mb-3 border-radius-3'> variaveis" . __LINE__ ."</div>";

     $nome = "ETEC Alfredo de Barros Santos";
     $idade = 25;
     $salario = 5000.55;
     $matriculado= true;


     echo "Nome:" . $nome . "<br>";
     echo "Idade:" . $idade .  "<br>";
     echo "Salário:" . $salario . " <br>";
     echo "Matriculado: " . $matriculado ." <br>";

     echo gettype($nome);
     echo "<br>";
     echo gettype($idade);
     echo "<br>";
     echo gettype($salario);
     echo "<br>";
     echo gettype($matriculado);
     echo "<br>";

     echo "<pre>";
     var_dump($nome, $idade, $salario, $matriculado);
     echo "</pre>";

  
?> </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>