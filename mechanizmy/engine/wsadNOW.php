<?php
    session_start();
?>
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
            $conn=mysqli_connect('localhost', 'root', 'r0d0dendr0n','config') or die('Nie można się połączyć: ' . mysql_error());
            $result = mysqli_query($conn,"SELECT IP FROM devices");
            while ($row = mysqli_fetch_array($result)) { 
                $_SESSION=$row[0];
                require 'nasconNOW.php';
                echo 'dziala1<br />';
                include 'tabNOW.php';
                echo 'dziala2<br />';
                require 'wstawianieNOW.php';
                echo 'dziala3<br />';
            }
            mysqli_free_result($result);
    ?>
</body>
</html>
<?php
    session_unset();
    session_destroy();
?>