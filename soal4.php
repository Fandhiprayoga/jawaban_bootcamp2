<?php 

	$begin 	= "2018-08-02";
	$end 	= "2018-08-10";

	echo "soal 4 : beetweendays ".$begin." - ".$end."<br>";
	echo "===================== <br>";
	
	function betweenDays($begin, $end)
	{
		$begin = new DateTime( $begin );
		$end = new DateTime( $end );
		$end = $end->modify( '+1 day' );

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($begin, $interval ,$end);

		foreach($daterange as $date){
		    echo $date->format("Y-m-d") . "<br>";
		}
	}

	betweendays($begin,$end);

 ?>