<?php

if(isset($_GET['t'])) {
    		
	$file = 'ReviewsData.php';
	$current = file_get_contents($file);
	$ReviewsArray = explode("\n",$current);
	sort($ReviewsArray);
	
	$output = '';
	for($i=0;$i<count($ReviewsArray);$i++) {

		if(strlen($ReviewsArray[$i]) > 0)
		{
			$ThisRow = explode("|",$ReviewsArray[$i]);
			
			if($ThisRow[6] && $ThisRow[6] == $_GET['t']) {
				$ReviewsArray[$i] = $ThisRow[0] . '|' . $ThisRow[1] . '|' . $ThisRow[2] . '|' . $ThisRow[3] . '|' . $ThisRow[4] . '|1|' . $ThisRow[6];
			} else {
				$ReviewsArray[$i] = $ThisRow[0] . '|' . $ThisRow[1] . '|' . $ThisRow[2] . '|' . $ThisRow[3] . '|' . $ThisRow[4] . '|' . $ThisRow[5] . '|' . $ThisRow[6];
			}
		}
		
	}
	
	//Now Implode
	
	echo 'Review approved';
			
} else {
	header('location: ../../../index.php');
exit();

}
?>