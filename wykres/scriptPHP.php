<?php
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
 
        $_SESSION = $_SESSION + 1;            //updatowania zmiennej sesyjnej, chuj nie działa
        echo $rows;                         //wynik 
    }
     counting($_SESSION);
?> 