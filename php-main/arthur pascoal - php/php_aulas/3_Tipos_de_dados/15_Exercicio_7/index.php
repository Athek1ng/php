<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $pessoa = [
    "nome" => "Arthur",
    "idade" => 20,
    "cidade" => "São Paulo"
   ];
if ($pessoa["idade"] >= 18) {
    echo "maior de idade.";
} else {
    echo "menor de idade.";
}
   ?>
</body>
</html>