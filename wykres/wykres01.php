<?php
    session_start();
    $_SESSION = 1;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript">
            window.onload = function () {
                
                    var column = [];                                        //deklaracja tablicy
                    for(var y = 0; y < 7; y++){
                        
                        column.push(<?php include 'scriptPHP.php'; ?>)      //dodawanie elementow(wyników działania scriptPHP.php ) do tablicy
                        
                        /*document.write(<?php //echo $_SESSION?>)*/       // tu jest zakomentowane wyświetlanie zmiennej sesyjne efekt ma być taki że wyświetli sie od 1-7
                    }

                var chart = new CanvasJS.Chart("chartContainer", {          //od tąd
                    theme: "light1", 
                    animationEnabled: true, 	
                    title:{
                        text: "Wykres aktywności"
                    },
                    data: [
                    {
                        type: "column",
                        dataPoints: [
                            { label: "column1",  y: column[0]  },
                            { label: "column2",  y: column[1] },
                            { label: "column3",  y: column[2] },
                            { label: "column4",  y: column[3] },
                            { label: "column5",  y: column[4] },
                            { label: "column6",  y: column[5] },
                            { label: "column7",  y: column[6] }
                        ]
                    }
                    ]
                });
                chart.render();

            }                                                               //do tąd raczej nie tykać bo nie chce mi się naprawiać
        </script>                                                          
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="canvasjs/canvasjs.min.js"> </script>
    </body>
</html>
<?php
    echo $_SESSION;
    session_destroy();
?>