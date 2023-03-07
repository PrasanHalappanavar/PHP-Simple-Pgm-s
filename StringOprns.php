<center>
<?php
	if(isset($_POST['submit']))
	{
		$str=$_POST['A'];
		
		$oprnd=$_POST['submit'];
		
		if(empty($str))
		{
			echo "😴Please enter a String...😫";
		}
		else
		{
			if($oprnd=="Length")
			{
				echo "📏<br>The length of string is:".strlen($str);
			}
			else if($oprnd=="Count")
				echo "📜<br>The total words of string is: ".str_word_count($str);
			else if($oprnd=="Capitalize")
				echo "⛓<br>The uppercase of each word is: ".ucwords($str);
			else if($oprnd=="Reverse")
				echo "⏩⏪<br>The reverse of string is: ".strrev($str);
			else if($oprnd=="Upper")
				echo "🔠<br>The uppercase of string is: ".strtoupper($str);
			else
				echo "🔡<br>The lowercase of string is: ".strtolower($str);
		}
	}
?>
</center>
<html>
<head>
<title>String PHP pgm</title>
<style>
	body{
		background-position:center;
		width:45px 20px;
		hight:30px 15px;
		border:3px solid;
		border-radius:40px 100px;
		align-items:center;
		padding:40px 80px;
		background-image: url("2089232.jpg");
	}
</style>
</head>
<body>
<center>
	<form method="POST">
		<marquee><h2>STRING OPERATIONS</h2></marquee>
		<input type="text" placeholder="Enter a String" name="A"/> <br><br>
		
		<input type="submit" value="Length" name="submit"/>
		<input type="submit" value="Count" name="submit"/>
		<input type="submit" value="Capitalize" name="submit"/>
		<input type="submit" value="Reverse" name="submit"/>
		<input type="submit" value="Upper" name="submit"/>
		<input type="submit" value="Lower" name="submit"/>
	</form>
</center>
</body>
</html>
<center>