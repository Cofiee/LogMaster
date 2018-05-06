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
				$tbname="log_".$date;
				$database="localhost";
				$login = "root";
				$haslo = "r0d0dendr0n";
				$base = "logi";
				$con=mysqli_connect($database,$login,$haslo,$base);
				if($con){
					echo 'good<br>';
				}else{
					echo 'bad';
				}
                $fileopen = fopen('logTemp.txt','r+') or die('Unable to open file');
                $data = fread($fileopen,filesize('logTemp.txt'));
                $pattern = "/\w[-\w=:.,\/ ()]+/";
                preg_match_all($pattern,$data,$array);
                $matches_num = count($array[0]);
                $a=0;
                foreach($array[0] as $match){
                    //echo $match."</br>";
                    $tabs[$a]=$match;
                    $a++;
                }
                $c=0;
                for($b=0;$b<count($tabs);$b++){
					$z=$b+1;
					if($tabs[$b]=='note=' && $tabs[$z]=='user='){
						$tabq[$c]='brak';
						$c++;
                    }elseif($tabs[$b]=='src='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='dst='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='msg='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='note='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='user='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='devID='){
                        $tabs[$b]=null;
                    }elseif($tabs[$b]=='cat='){
                        $tabs[$b]=null;
                    }else{
                    $tabq[$c]=$tabs[$b];
                        $c++;
                    }
				}	
								 
				$zmienna_urzadznie = $tabq[0];
				$len = count($tabq);
				echo $len."<br>";
     			$e = 0;
				for($d=0;$d<$len; $d++){
					if($tabq[$d]==$zmienna_urzadznie){
 						$sql="INSERT INTO `$tbname` (device,src,dst,msg,note,user,devID,cat) VALUES ('$tab2[0]','$tab2[1]','$tab2[2]','$tab2[3]','$tab2[4]','$tab2[5]','$tab2[6]','$tab2[7]')";
						 if(!$d==0){
							if(!mysqli_query($con,$sql)){
								echo 'nie dziala';
							}
						}
						$tab2[0]=$zmienna_urzadznie;
						$e=1;
					}else{
						    $tab2[$e] = $tabq[$d];
							$e++;
							echo "OK";
					}
				}
			}
			connect();
		?> 
		</div>
	</body>
</html>