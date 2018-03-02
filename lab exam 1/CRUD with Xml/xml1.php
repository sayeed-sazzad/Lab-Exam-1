<?php
	$myXMLData =
		"<?xml version='1.0' encoding='UTF-8'?>
		<book category='COOKING'>
			<title lang='en'>Everyday Italian</title>
			<author>Giada De Laurentiis</author>
			<year>2005</year>
			<price>30.00</price>
		</book>";

	$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
	//print_r($xml);
	
	echo $xml->title. "<br/>";
	echo $xml->author. "<br/>";
	echo $xml->year. "<br/>";
	echo $xml->price;
?> 




