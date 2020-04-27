<?php
	$text1 = $_POST["text"];

	if ($text1 != ""){
		echo ("Message sent!");
		echo("Text:" . $text1);
		$file = fopen("data.txt", "a");
		fwrite($file, $text);
		fclose($file);

	}else
	{
		echo("Message failed");
	}

?>