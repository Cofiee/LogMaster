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
        $date=date('Ymd');
        $tbname="log_".$date;
        $ip="192.168.1.1";
    if(!function_exists('crtab')){
        function crtab($tbname,$ip){
            $dbs="localhost";
            $lg="root";
            $ps="r0d0dendr0n";
            $db="logi_".$ip;
            $sql="CREATE TABLE ".$tbname." (
                id INT AUTO_INCREMENT PRIMARY KEY,
                device VARCHAR(10000),
                src VARCHAR(200),
                dst VARCHAR(500),
                msg VARCHAR(200),
                note VARCHAR(200),
                user VARCHAR(200),
                devID VARCHAR(200),
                cat VARCHAR(200)
                )";
            $conn=mysqli_connect($dbs,$lg,$ps,$db);
            $query=mysqli_query($conn,$sql);
            if($conn){
                echo"krok1 dziala<br>";
                if($query){
                    echo"krok2 dziala<br>";
                }else{
                    echo"krok2 nie dziala";
                }
            }else{
                echo "krok1 nie dziala";
            }
            mysqli_close($conn);
            echo $tbname;
        }
    }
        crtab($tbname,$_SESSION);
    ?>
</body>
</html>
