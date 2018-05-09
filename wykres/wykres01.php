<!DOCTYPE HTML>
<html>
    <head>
<?php
    $yea = 1;
    function counting($x){
        $x-1;
        $sys    = 'localhost';
        $lg     = 'root';
        $ps     = '';
        $db     = 'test';
        
        if($x != 0){
            $Ymd = date('Ymd');                                             //NIE RUSZAĆ
            $date = strtotime ( "-".$x." day" , strtotime ( $Ymd ) ) ;      //NIE RUSZAĆ
            $date = date ( 'Ymd' , $date );                                 //NIE RUSZAĆ
            $tbname ="log_".$date;                                          //NIE RUSZAĆ
            $con = mysqli_connect($sys, $lg, $ps, $db);                     //NIE RUSZAĆ
            $query = mysqli_query($con, "SELECT * FROM test1");             //NIE RUSZAĆ
            $countRows = mysqli_num_rows($query);                           //NIE RUSZAĆ
            if($countRows) $rows = $countRows;                          //NIE RUSZAĆ
        }else{                                                              //NIE RUSZAĆ
            $tbname ="log_".$date;                                          //NIE RUSZAĆ
            $con = mysqli_connect($sys, $lg, $ps, $db);                     //NIE RUSZAĆ
            $query = mysqli_query($con, "SELECT * FROM test1");             //NIE RUSZAĆ
            $countRows = mysqli_num_rows($query);                           //NIE RUSZAĆ
            if($countRows) $rows = $countRows;                          // to jest do liczenia wierszy i ustalania nazwy NIE RUSZAĆ
        }
 
            //updatowania zmiennej sesyjnej, chuj nie działa
        echo $rows;                         //wynik 
    }

echo        "<script type='text/javascript'>";
echo            "window.onload = function () {";
                
echo                    "var column = [];";                                        //deklaracja tablicy
                    for($y = 0; $y < 7; $y++){
                        
echo                        "column.push(";
counting($yea);
echo");";      //dodawanie elementow(wyników działania scriptPHP.php ) do tablicy
$yea = $yea + 1;                        
                               // tu jest zakomentowane wyświetlanie zmiennej sesyjne efekt ma być taki że wyświetli sie od 1-7
                    };

echo                "var chart = new CanvasJS.Chart('chartContainer', {";          //od tąd
echo                    "theme: 'light1',"; 
echo                    "animationEnabled: true,"; 	
echo                    "title:{";
echo                        "text: 'Wykres aktywności'";
echo                    "},";
echo                    "data: [";
echo                    "{";
echo                        "type: 'column',";
echo                        "dataPoints: [";
echo                            '{ label: "column1",  y: column[0]  },';
echo                            '{ label: "column2",  y: column[1] },';
echo                            '{ label: "column3",  y: column[2] },';
echo                            '{ label: "column4",  y: column[3] },';
echo                            '{ label: "column5",  y: column[4] },';
echo                            '{ label: "column6",  y: column[5] },';
echo                            '{ label: "column7",  y: column[6] }';
echo                        "]";
echo                    "}";
echo                    "]";
echo                "});";
echo                "chart.render();";

echo            "}";                                                               //do tąd raczej nie tykać bo nie chce mi się naprawiać
echo        "</script>";
                                                          
echo    '</head>';
echo    '<body>';
echo        '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';
echo        '<script src="canvasjs/canvasjs.min.js"> </script>';
echo $yea;
echo    '</body>';
?>
</html>