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
        $output = 'Udalo sie polaczyc z baza';
        include 'output.html.php';
    ?>
</body>
</html>