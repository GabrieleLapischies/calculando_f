<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
    <form id="inicial" method="post" action="calculando.php">
        <h1> Calculadora </h1>
        Primeiro Valor: <input name="val1" type="text"><br>
        Segundo Valor:<input name="val2" type="text"><br>
        <input name="btn" type="submit" value="+">
        <input name="btn" type="submit" value="-">
        <input name="btn" type="submit" value="*">
        <input name="btn" type="submit" value="/"><br>
        <input name="limp" type="reset" value="limpar">
    </form>
</body>
</html>