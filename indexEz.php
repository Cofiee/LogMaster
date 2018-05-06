<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="stylek" rel="Stylesheet" type="text/css" href="mechanizmy/Ezmode/stylEz.css" />
    <title>LogMaster</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Prosty widok</h1>
        </div>
        <div id="sideb">
            <div id="top">
                <div id="sr">
                    <form id="searchPanel" action="" method="post">
                            <div id="srsr">
                                Wyszukaj<br />
                                <select id="database" name="database">
                                <?php
                                    function showDb(){
                                        echo '<div style="font-size: 50px;">'."Nazwa: ".$data."</div>";
                                        $conn=mysqli_connect('localhost', 'root', 'r0d0dendr0n','config') or die('Nie można się połączyć: ' . mysql_error());
                                        $result = mysqli_query($conn,"SELECT * FROM devices");
                                        while ($row = mysqli_fetch_array($result)) { 
                                           echo"<option value=$row[2]>$row[1]</option>";
                                        }
                                        echo"</table></div>";
                            
                                        mysqli_free_result($result);
                                    }
                                    showDb();
                                ?>
                                </select>
                                dd_mm_rrrr.<br>
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
                                    <label>Filtrowanie
                                        <input type="checkbox" name="check"></input><br />
                                    </label>
                                    <div id="button">
                                        <input type="submit" name="sub" id="sub" value="Wyszukaj">
                                    </div>   
                            </div>
                </div>
                <div id="fl">
                        <div id="">  
                            <label>Kategoria
                                <select name="cat">
                                    <option value="Account">Account</option>
                                    <option value="ADP">ADP</option>
                                    <option value="Anti Spam">Anti Spam</option>
                                    <option value="AP Firmware">AP Firmawre</option>
                                    <option value="Application Patrol">Application Patrol</option>
                                    <option value="AP Load Balancing">AP Load Balancing</option>
                                    <option value="Auth Dot Policy">Auth Policy</option>
                                    <option value="Authentication Server">Authentication Server</option>
                                    <option value="Blocked web sites">Blocked web sites</option>
                                    <option value="Built in Service">Built in Service</option>
                                    <option value="BWM">BWM</option>
                                    <option value="CAPWAP">CAPWAP</option>
                                    <option value="Cellular">Cellular</option>
                                    <option value="CloudCNM">CloudCNM</option>
                                    <option value="Connectivity Check">Connectivity Check</option>
                                    <option value="Content Filter">Content Filter</option>
                                    <option value="Daily Report">Daily Report</option>
                                    <option value="Default">Default</option>
                                    <option value="DHCP">DHCP</option>
                                    <option value="File Manager">File Manager</option>
                                    <option value="Force Authentication">Force Authentication</option>
                                    <option value="Forward Clear Mails">Forward Clear Mails</option>
                                    <option value="Forward web sites">Forward web sites</option>
                                    <option value="IDP">IDP</option>
                                    <option value="IKE">IKE</option>
                                    <option value="Inbound Load Balancing">Inbound Load Balancing</option>
                                    <option value="Interface">Interface</option>
                                    <option value="Interface Statistics">Interface Statistics</option>
                                    <option value="IP MAC Binding">IP MAC Binding</option>
                                    <option value="IPSec">IPSec</option>
                                    <option value="L2TP Over IPSec">L2TP OVER IPSec</option>
                                    <option value="Layer 2 Isolation">Layer 2 Isolation</option>
                                    <option value="Myzyxel Dot Com">Myzyxel Dot Com</option>
                                    <option value="NAT">NAT</option>
                                    <option value="PKI">PKI</option>
                                    <option value="Policy Route">Policy Route</option>
                                    <option value="Port Grouping">Port Grouping</option>
                                    <option value="Redirect Service">Redirect Service</option>
                                    <option value="Real Time Location System">Real Time Location System</option>
                                    <option value="Security Policy Control">Security Policy Control</option>
                                    <option value="Sessions Limit">Sessions Limit</option>
                                    <option value="SSL VPN">SSL VPN</option>
                                    <option value="SSO">SSO</option>
                                    <option value="System">System</option>
                                    <option value="System Monitoring">System Monitoring</option>
                                    <option value="Traffic Log">Traffic Log</option>
                                    <option value="UPnP">UPnP</option>
                                    <option value="USB Storage">USB Storage</option>
                                    <option value="User">User</option>
                                    <option value="Warning web sites">Warning web sites</option>
                                    <option value="Web Authentication">Web Authentication</option>
                                    <option value="Wireless LAN">Wireless LAN</option>
                                    <option value="WLAN Auto Healing">WLAN Auto Healing</option>
                                    <option value="WLAN Band Select">WLAN Band Select</option>
                                    <option value="WLAN Dynamic Channel Selection">WLAN Dynamic Channel Selection</option>
                                    <option value="WLAN Frame Capture">WLAN Frame Capture</option>
                                    <option value="WLAN Monitor Mode">WLAN Monitor Mode</option>
                                    <option value="WLAN Rogue AP Detection">WLAN Rogue AP Detection</option>
                                    <option value="Wlan Station Info">Wlan Station Info</option>
                                    <option value="ZySH">ZySH</option>                                   
                                </select>
                            </label> 
                        </div>  
                    </form>      
                </div>
                <a href="index.php">
                        <div id="back">
                            Powrót do domu<br />
                                <img class=imag1 src="mechanizmy/Ezmode/obrazy/back.png" style="width:90px;height:100px;margin-top:0px;margin-left:118px;">
                        </div>
                </a>
            </div>



            <div id="down">
                <div id="left">
                    <a href="">
                        <div id="man" >
                            Instrukcja<br />
                            <img class=imag2 src="mechanizmy/Ezmode/obrazy/man.png" style="width:70px;height:80px;">
                        </div>
                    </a>
                </div>
                <div id="right">
                    <a href="mechanizmy/engine/wsadNOW.php">
                        <div id="clear">
                            Pobierz dzisiejszy log<br />
                            <img class=imag2 src="mechanizmy/Ezmode/obrazy/now.png" style="width:70px;height:70px;margin-top:0px;margin-left:42px;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="content">
            <?php
                if(isset($_POST['sub'])){
                    
                    $data=$_POST['year'].$_POST['month'].$_POST['day'];
                    $where="";
                    $point="";
                    $db="logi_".$_POST['database'];
                    if(isset($_POST['check'])){
                        $where="WHERE";
                        $point="cat=".'"'.$_POST['cat'].'"';
                    }
                    showtb($data,$db,$where,$point);
                }
            ?>
        </div>
        <div id="footer">
            
        </div>
    </div>
</body>
    <?php
        function showtb($datka,$db,$where,$point){
            $data="log_".$datka;
            echo '<div style="font-size: 50px;">'."Nazwa: ".$data."</div>";
            $conn=mysqli_connect('localhost', 'root', 'r0d0dendr0n',$db) or die('Nie można się połączyć: ' . mysql_error());
            $result = mysqli_query($conn,"SELECT * FROM `$data` $where $point");
            echo"<div id='kurwa'><table border='1px'>";
            echo "<td>id</td><td>nazwa_urzadzenia</td><td>src</td><td>dst</td></td><td>msg</td></td><td>note</td></td><td>user</td><td>devID</td><td>cat</tb>";
            while ($row = mysqli_fetch_array($result)) { 
                echo"<tr>";
                echo    "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td>";
                echo"</tr>";
            }
            echo"</table></div>";

            mysqli_free_result($result);
        }
    ?>
</html>