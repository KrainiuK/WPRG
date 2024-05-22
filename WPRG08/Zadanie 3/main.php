<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
    <style>
        .formularz {
            width: 500px;
            height: auto;
            margin: auto;
            padding: 5px;
            border: 1px solid black;
            border-radius: 25px;
            background: lightgray;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="formularz">
    <form action="main.php">
        <label for="string">Wprowadż ciąg znaków:</label> <input type="text" name="string" id="string"> <br>
        <select name="operation" id="operation">
            <option value="reverse">reverse</option>
            <option value="toupper">toupper</option>
            <option value="tolower">tolower</option>
            <option value="count">count</option>
            <option value="remove whitespace">remove whitespace</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php
    $string = $_GET['string'];
    $operation = $_GET['operation'];
    if (!$string && $string != 0) {
        echo "Brak wpisu";
    } else {
        switch ($operation) {
            case 'reverse':
                echo strrev($string);
                break;
            case 'toupper':
                echo strtoupper($string);
                break;
            case 'tolower':
                echo strtolower($string);
                break;
            case 'count':
                echo strlen($string);
                break;
            case 'remove whitespace':
                echo trim($string);
                break;
        }
    }
    ?>
</div>
</body>
</html>