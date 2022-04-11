<?php 
$namaasc = array("Tony","Natasha","Wanda","Thoriq","Jonatan","Harry","Hermione","Nata","April","Cika","Putri","Nita","Vito","Kevin","Marc","Steven","Peter","Kate","Michelle","Fajar","Rian","Risma","Leo","Daniel","Bagas","Fikri","Lucky","Danang","Desta","Kristin");sort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);

echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($namaasc){
	for ($i=0; $i <30 ; $i++) {
	echo "<p>$namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($namaasc);
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>$nrpdesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc);

 ?>

