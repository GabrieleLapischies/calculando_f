<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de resultado</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
    <div class="container">
    <?php
        if (isset($_POST["btn"])){
            $v1 = $_POST["val1"];
            $v2 = $_POST["val2"];
            $op = $_POST["btn"];

            switch($op){
                case ("+"):
                    $res = $v1 + $v2;
                    echo "A adição entre $v1 e $v2 é: $res";
                break;
                case ("-"):
                    $res = $v1 - $v2;
                    echo "A subtração entre $v1 e $v2 é: $res";
                break;
                case ("*"):
                    $res = $v1 * $v2;
                    echo "A multiplicação entre $v1 e $v2 é: $res";
                break;
                case ("/"):
                    $res = $v1 / $v2;
                    if ($v2 = 0 and $op = "/"){
                        echo "É impossível realizar a divisão de um número por zero!";
                    }
                    else
                        echo "A divisão entre $v1 e $v2 é: $res";
                break;
            }
            
        }

    ?>
    </div>
</body>
</html>