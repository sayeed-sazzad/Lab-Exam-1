<?php

	$myfile = fopen("user.xml", "w");
	
	$myXMLData =
		"<?xml version='1.0' encoding='UTF-8'?>
		<book category='COOKING'>
			<title lang='en'>Everyday Italian</title>
			<author>Giada De Laurentiis</author>
			<year>2005</year>
			<price>30.00</price>
		</book>";
		
	fwrite($myfile, $myXMLData);
	fclose($myfile);

?>