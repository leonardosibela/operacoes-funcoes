<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="calcula.php" method="post">
        Valor 1: <input type="number" name="numeroUm"><br><br>
        Valor 2: <input type="number" name="numeroDois"><br><br>

        Operação: 
        <select name="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Muliplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 
        if (isset($_GET["resultado"])) {
            echo "<br><br>";
            echo "O resultado é: " . $_GET["resultado"];
        }
    ?>

</body>
</html>