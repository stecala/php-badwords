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
        $text = 'Ciao, Sono Stefano e studio per diventare web developer. Ciao ciao';
        
        echo $text .'. Questa frase e\' lunga '. strlen($text). ' caratteri';
        
        $censura = $_GET['censura'];
    ?>
    <br>
    <?php
        $fraseCensurata = str_replace($censura , '***' , $text);

        echo $fraseCensurata .' Questa frase e\' lunga '. strlen($fraseCensurata). ' caratteri'
    ?>
</body>
</html>