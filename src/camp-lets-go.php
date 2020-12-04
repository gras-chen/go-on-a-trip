<?php
	header("Access-Control-Allow-Origin:*");
	$url = "https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelStay.aspx";
	$mydata = file_get_contents($url);
	// echo json_encode($mydata);
	echo $mydata;

?>