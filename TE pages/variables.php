<?php
	
	$host='localhost';
	$user='n20';
	$pwd='0000';
	$db='travelexperts';
	
	$num_uses=0;
	$package_name='Western Canada Tour';
	$price=1230.45834;
	$number_of_travellers=15;
	$tax=0;
	$num_uses=0;
	define("GST",5);
	
	$tax=$price*$number_of_travellers*GST/100;
	
	
	
	$urls=array("BC"=>"https://www2.gov.bc.ca");
	$urls["AB"]="https://www.alberta.ca";
	$urls["BC"]="https://www2.gov.bc.ca";
	$urls["SK"]="https://www.saskatchewan.ca/";
	$urls["MB"]="https://auroravillage.com";
	//$urls=array("SK"=>"https://www.saskatchewan.ca/");
	//$urls=array("ON"=>"https://www.ontario.ca/");
	//$urls=array("MB"=>"https://www.gov.MB.ca");
	
	$links=array("Yellow Knife"=>"https://auroravillage.com");
	$links["Niagara Falls"]="https://www.niagarafallstourism.com";
	$links["Peggy's Cove"]="http://www.peggyscoveregion.com";
	$links["Fundy Bay"]="https://www.pc.gc.ca/en/pn-np/nb/fundy";
	$links["Banff"]="https://www.pc.gc.ca/en/pn-np/ab/banff";
	
	

?>
