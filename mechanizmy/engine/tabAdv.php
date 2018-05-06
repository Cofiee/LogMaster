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
        $Ymd=date('Ymd');
        $date = strtotime ( '-1 day' , strtotime ( $Ymd ) ) ;
        $date = date ( 'Ymd' , $date );
        $tbname="logAdv_".$date;
        function crtab($tbname){
            $dbs="localhost";
            $lg="root";
            $ps="r0d0dendr0n";
            $db="logiAdv";
            $sql="CREATE TABLE ".$tbname." (
                id int auto_increment primary key,
                m1 varchar(20),
                m2 varchar(2000)
                )";
            $conn=mysqli_connect($dbs,$lg,$ps,$db);
            $query=mysqli_query($conn,$sql);
            if($conn){
                echo"krok1 dziala<br>";
                if($query){
                    echo"krok2 dziala<br>";
                }else{
                    echo"krok2 nie dziala";
                    exit();
                }
            }else{
                echo "krok1 nie dziala";
                exit();
            }
            mysqli_close($conn);
            echo $tbname;
        }

        crtab($tbname);
    ?>
</body>
</html>
