<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "<br> alek";
    $idade = "17";
    echo "ola mundo <br>" .$nome . "<br> Idade:" .$idade;
    if($idade < 18){
        echo "<br> Menor";
         } else {
        echo "<br> Maior";
         }

         $pessoas = ["<br>Alek","<br>Robson","<br>Thay"];

         for($i=0; $i<count($pessoas);$i++){
            echo $pessoas[$i]."<br>";
         }
         $idades = [18,15,23];
         foreach($idades as $item ){
            if($item>=18){
                echo $item . "<br>";
         }
        }
    ?>
</body>
</html>