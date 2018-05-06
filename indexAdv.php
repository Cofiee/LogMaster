<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="stylek" rel="Stylesheet" type="text/css" href="mechanizmy/Advmode/stylAdv.css" />
    <title>LogMaster</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Zaawansowany widok</h1>
        </div>
        <div id="sideb">
            <div id="top">
                <a href="index.php">
                    <div id="back">
                        Powrót do domu<br />
                            <img class=imag1 src="mechanizmy/Advmode/obrazy/back.png" style="width:90px;height:100px;margin-top:0px;margin-left:118px;">
                    </div>
                </a>
                <div id="sr">
                    Wyszukaj<br />
                    dd_mm_rrrr.<br>
                    <form id="searchPanel" action="" method="post">
                        <select name="day" size="1">
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="month">
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select name="year">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                        </select>
                        <div id="button">
                            <input type="submit" name="sub" id="sub" value="Wyszukaj">
                        </div>
                    </form>              
                </div>
            </div>   
            <div id="down">
                <div id="left">
                    <a href="">
                        <div id="man">
                            Instrukcja<br />
                            <img class=imag2 src="mechanizmy/hubMaterials/obrazy/man.png" style="width:70px;height:80px;">
                        </div>
                    </a>
                </div>
                <div id="right">
                        <div id="">
                        
                        </div>
                </div>
            </div>
        </div>
        <div id="content">
            <?php
                if(isset($_POST['sub'])){
                    $data=$_POST['year'].$_POST['month'].$_POST['day'];
                    showtb($data);
                }
            ?>
        </div>
        <div id="footer">
            
        </div>
    </div>
</body>
    <?php
        function showtb($datka){
            $data="logAdv_".$datka;
            echo '<div style="font-size: 50px;">'."Nazwa: ".$data."</div>";
            $conn=mysqli_connect('localhost', 'root', 'r0d0dendr0n') or
            die('Nie można się połączyć: ' . mysql_error());
            mysqli_select_db($conn,'logiAdv');
            $result = mysqli_query($conn,"SELECT * FROM `$data`");
            echo"<div id='kurwa'><table border='1px'>";
            echo "<td>id</td><td>nazwa_urządzenia</td><td>dane</td>";
            while ($row = mysqli_fetch_array($result)) { 
                echo"<tr>";
                echo    "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
                echo"</tr>";
            }
            echo"</table></div>";

            mysqli_free_result($result);
        }
    ?>
</html>