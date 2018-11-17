<?php 
	
	function segitiga($tinggiSegitiga)
	{
		//baris
		for($x=0;$x<$tinggiSegitiga;$x++)
		{
			//kolom
			for($y=0;$y<($tinggiSegitiga*2-1);$y++)
			{
				
				if($x<=$y)
				{
					//cari tepi kanan
					if($y>(($tinggiSegitiga*2)-2)-$x)
					{
						echo "&nbsp;"."&nbsp;";
					}
					else
					{
						//cari tengah segitiga
						if($x!=0 && $y>$x && $y<(($tinggiSegitiga*2)-2)-$x)
						{
							echo "&nbsp;"."&nbsp;";
						}
						else
						{
							echo "*";
						}
						
					}

				}
				//cari tepi kiri
				if($x>$y)
				{
					echo "&nbsp;"."&nbsp;";
				}
				
				
			}
			echo "<br>";
		}
	}

	segitiga(8);
 ?>