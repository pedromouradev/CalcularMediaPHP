<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
    <link rel="shortcut icon" href="../img/Icon.ico" type="image/x-icon">

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body {
            background-color: #1e2124;
            color: white;
            text-align: center;
        }
        span {
            color: green;
        }
        h3 {
            color: red;
            font-size: 50pt;
        }
        h5 {
            font-size: 15pt;
        }
        a {
            text-decoration: none;
            color: #ffff;
        }
        a:hover {
            color: rgb(202, 202, 202);
        }
    </style>
    <br>
    <br>
    <br>
    <h1>Calcular Média</h1>
    <?php
        $n1 = $_POST ['txtN1'];    
        $n2 = $_POST ['txtN2'];
        $n3 = $_POST ['txtN3'];
        $n4 = $_POST ['txtN4'];
        $soma = (($n1+$n2+$n3+$n4)/4);
        if ($soma > 6) {
            echo"<h2><b>A média final é:</b></h2>";
            echo"<h3><span><b>$soma</b></span></h3>";
        }
        if ($soma < 6) {
            echo"<h2><b>A média final é:</b></h2>";
            echo"<h3><b>$soma</b></h3>";
        }
        
	?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer><h5>Feito com ❤ por <a href="https://github.com/pedromouradev">Pedro Moura</a> e <a href="https://github.com/roycyeduardo">Roycy</a></h5></footer>
</body>
</html>