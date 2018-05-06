<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $link = mysqli_connect('localhost','root','elw00d12');
    if(!$link)
    {
        $output = "Nie można polaczyc się z serwerem bazy danych";
        include 'output.html.php';
        exit();
    }
    if(!mysqli_charset($link, 'UTF8')){
        $output = "Nie mozna ustanowic kodowania UTF8";
        include 'output.html.php';
        exit();
    }
    if(!mysqli_select_db($link, 'jdb')){
        $output = 'Nie udalo sie wybrac bazy jdb';
        include 'output.html.php';
        exit();
    }
    $sql = 'CREATE TABLE kawal()
        id int not null auto_increment primary key,
        tekstkawalu tekst,
        datakawalu date not null,
        )
        default character_set utf8';
    if(!mysqli_query($link, $sql)){
        $output = 'Nie udalo sie utworzyc tabeli kawal'. mysqli_error($link);
        include 'output.html.php';
        exit();
    }
    $output = 'Udalo sie utworzyc taki kawal.'

    ?>
</body>
</html>