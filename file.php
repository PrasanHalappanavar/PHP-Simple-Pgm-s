<?php
	$file2=fopen("file2.txt", 'w');
	if(file_exists("file1.txt"))
	{
		$file1=fopen("file1.txt", 'r');
		while($ch=fgetc($file1))
		{
			fputs($file2,$ch);
			
			
		}
		$str="be good,do good";
		fputs($file2,$str);
		echo "successfully completed...";
		fclose($file1);
		fclose($file2);
	}
?>