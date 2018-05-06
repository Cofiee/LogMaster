<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>...</title>
	</head>
	<body>
		<div id="cont">		
		<?php			
			function connect(){
				$Ymd=date('Ymd');
				$date = strtotime ( '-1 day' , strtotime ( $Ymd ) ) ;
				$date = date ( 'Ymd' , $date );
				$tbname="logAdv_".$date;
				$database="localhost";
				$login = "root";
				$haslo = "r0d0dendr0n";
				$base = "logiAdv";
				$con=mysqli_connect($database,$login,$haslo,$base);
				if($con){
					echo 'good<br>';
				}else{
					echo 'bad';
				}
				$fileopen = fopen('/home/adm05/logTemp.txt','r+') or die('Unable to open file');
					$data = fread($fileopen,filesize('/home/adm05/logTemp.txt'));
					$pattern = "/^[\w]*|[()-\w\d .:=\"\/].+/m";
					preg_match_all($pattern,$data,$array);
					$matches_num = count($array[0]);
					$a=0;
					foreach($array[0] as $match){
						//echo $match."</br>";
						$tabs[$a]=$match;
						$a++;
					}					 
					$zmienna_urzadznie = $tabs[0];
				$len = count($tabs);
				echo $len."<br>";
     			$e = 0;
				for($d=0;$d<$len; $d++){

					if($tabs[$d]==$zmienna_urzadznie){
 						$sql="INSERT INTO $tbname (m1,m2) VALUES ('$tab2[0]','$tab2[1]')";
						 if(!$d==0){
							if(!mysqli_query($con,$sql)){
								echo 'nie dziala';
							}
						}												
						$tab2[0]=$zmienna_urzadznie;
						$e=1;
					}else{
						$tab2[$e] = $tabs[$d];
						$e++;
					}
				}
			}
			connect();
		?> 
		</div>
	</body>
</html>