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
        $tbname="Devices";
        function crtab($tbname){
            $dbs="localhost";
            $lg="root";
            $ps="r0d0dendr0n";
            $db="config";
            $sql="CREATE TABLE ".$tbname." (
                id INT AUTO_INCREMENT PRIMARY KEY,
                device VARCHAR(1000),
                IP VARCHAR(200)
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
