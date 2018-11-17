<?php 
	echo "soal 5 : replace character <br>";
	echo "===================== <br>";
    

	function ganti($kalimat, $charReplace, $charToReplace)
	{
		//string to char array
		$char_array = preg_split('//', $kalimat, -1, PREG_SPLIT_NO_EMPTY);

		//chek char array
		$i=0;
		foreach($char_array as $a)
		{
			
			if($a==$charReplace)
			{
				$char_array[$i] = $charToReplace;
			}
			$i++;
		}
		//tampil data
		foreach($char_array as $b)
		{
			echo $b;
		}

	}
	//using function
	ganti("kelompok", "o", "a");
 ?>