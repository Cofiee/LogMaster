<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="stylek" rel="Stylesheet" type="text/css" href="mechanizmy/addMaterials/style.css" />
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Dodawanie urządzeń<h1>
        </div>
        <div id="content">
            <div id="sidebar">
                Przed przystąpieniem do korzystania z naszego programu musisz dodać swoje urządzenie sieciowe do bazy danych. Aby to zrobić postępuj zgodnie z następującymi krokami:<br/>
                1.Zmień adres swojego urządzeń sieciowego na statyczny przez stronę konfiguracyjną swojego urządzenia. Jeśli nie wiesz jak to zrobić odwołaj się do instrukcji dołączonej do 
                twojego urządzenia lub dokumentacji sieciowej dostępnej na stronie producenta.<br/>
                2.Zlokalizuj adres swojego urządzenia sieciowego i wpisz go w pole "Adres IP". Pamiętaj o poprawny formacie adresu np. 127.0.0.0.<br/>
                3.Wpisz nazwę swojego urządzenia w pole "Nazwa urządzenia".<br/>
                4.Jeśli wykonasz wszystkie kroki poprawnie twoje urządzenie zostanie dodane do bazy danych i będziesz mógł korzystać z naszego programu.

            </div>
            <div id="formularz">
                <form action="" method="post">
                    Nazwa urządzenia<br />
                    <input id="device" name="device" type="text" required><br />
                    <br />
                    Adres IP<br />
                    <input id="ip" name="ip" type="text" required><br />
                    <br />
                    <input id="submit" name="submit" type="submit" value="Dodaj urządzenie">

                </form>
                <div id="message">
                    <div id="messOk">
                    </div>
                    <div id="messBad">
                    </div>
                </div>
                <div id='sample'>
                    <h2>Przykładowe komunikaty z objaśnieniami</h3>
                    Pomyślnie dodano urządzenie<br />
                    Błąd przy dodawaniu urządzenia-Urządzenie nie zostało dodane pomyślnie<br />
                    Błąd połączenia-Nie udało się połaczyć z baż danych<br />
                    Błąd dodawania bazy danych-Nie udało się utworzyć bazy danych<br />
                </div>
                <div id='php'>
                    <?php
                        function addDevice($name,$ip){
                            $msq='localhost';
                            $lg='root';
                            $pass='r0d0dendr0n';
                            $db='config';
                            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {

                            }else{
                                echo "<script>
                                        document.getElementById('messBad').innerHTML='Adres IP jest nie poprawny.'
                                    </script>
                                    ";
                                exit();
                            }

                            $con=mysqli_connect($msq,$lg,$pass,$db);
                            $sql="INSERT INTO devices (device,IP) VALUES ('$name','$ip')";
                            $query=mysqli_query($con,$sql);
                            if($con){
                                
                                if($query){
                                    echo "<script>
                                            document.getElementById('messOk').innerHTML='Pomyślnie dodano urządzenie.'
                                        </script>
                                        ";
                                }else{
                                    echo "<script>
                                            document.getElementById('messBad').innerHTML='Błąd dodawania urządzenia.'
                                        </script>
                                        ";
                                }
                            }else{
                                echo "<script>
                                        document.getElementById('messBad').innerHTML='Błąd połączenia2.'
                                    </script>
                                    ";
                            }
                        }
                        function crDb($name, $ip){
                            $msq='localhost';
                            $lg='root';
                            $pass='r0d0dendr0n';
                            $db='config';
                            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {

                            }else{
                                echo "<script>
                                        document.getElementById('messBad').innerHTML='Adres IP jest nie poprawny.'
                                    </script>
                                    ";
                                exit();
                            }
                            $con=mysqli_connect($msq,$lg,$pass);
                            $sql="CREATE DATABASE `logi_$ip`";
                            $query=mysqli_query($con,$sql);
                            if($con){
                                
                                if($query){
                                
                                }else{
                                    echo "<script>
                                            document.getElementById('messBad').innerHTML='Błąd dodawania bazy danych.'
                                        </script>
                                        ";
                                    exit();
                                }
                            }else{
                                echo "<script>
                                        document.getElementById('messBad').innerHTML='Błąd połączenia1.'
                                    </script>
                                    ";
                                exit();
                            }
                        }
                        if(isset($_POST['submit'])){ 
                        crDb($_POST['device'],$_POST['ip']);
                        addDevice($_POST['device'],$_POST['ip']);
                        mysqli_exit();
                        }
                    ?>
                </div>     
            </div>
        </div>
    </div>
</body>
</html>