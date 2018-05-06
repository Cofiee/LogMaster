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
        if(!function_exists('ftptake')){
            function ftptake($ip){
                $ftpsr="192.168.1.36";
                $ftplg="admin";
                $ftpps="zyxel@1234";
                $conn=ftp_connect($ftpsr);
                $logIn=ftp_login($conn,$ftplg,$ftpps);
                $Ym=date('Ym');
                $Ymd=date('Ymd');
                

                $wayRemote="/admin/$Ym/$ip"."_$Ymd.txt";
                $wayLocal="logDzisiejszy.txt";
                $handle=fopen($wayLocal,'w');
                $get=ftp_fget($conn, $handle, $wayRemote, FTP_ASCII, 0);
                if($conn){
                    if($logIn){
                        if($get){
                            echo "Pomyślnie pobrano $wayRemote";
                        }else{
                            echo "Próba pobrania pliku $wayRemote do $wayLocal nie powiodła się";
                        }
                    }else{
                        echo "Błąd logowania";
                    }
                }else{
                    echo "Błąd połączenia";
                }
                ftp_close($conn);
                fclose($handle);
            }
        }
        ftptake($_SESSION);
        ini_set('display_errors', 1); 
        error_reporting(E_ALL);
        
    ?>
</body>
</html>