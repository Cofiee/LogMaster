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
        function addDevice($name,$ip){
            $msq='localhost';
            $lg='root';
            $pass='r0d0dendr0n';
            $db='config';
            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {
                echo("$ip is a valid IP address<br />");
            }else{
                echo("$ip is a invalid IP address<br />");
                //exit();
            }
            $con=mysqli_connect($msq,$lg,$pass);
            $sql="CREATE DATABASE `logi_$ip`";
            $query=mysqli_query($con,$sql);
            if($con){
                echo "polączono";
                if($query){
                    echo "dziala<br />";
                }else{
                    echo "domysl sie<br />";
                }
            }else{
                echo "Błąd połączenia";
            }
            mysqli_exit();
        }
        addDevice("aaa","192.168.1.7");
    ?>
</body>
</html>