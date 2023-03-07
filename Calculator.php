<?php
	$result=0;
	if(isset($_POST['submit']))
	{
		$n1=$_POST['A'];
		$n2=$_POST['B'];
		
		$oprnd=$_POST['submit'];
		
		if(empty($n1) or empty($n2))
		{
			echo "😴Please enter a String...😫";
		}
		else
		{
			if($oprnd=="+")
				$result=$n1+$n2;
			else if($oprnd=="-")
				$result=$n1-$n2;
			else if($oprnd=="x")
				$result=$n1*$n2;
			else
				$result=$n1/$n2;
		}
	}
?>

<center>
<html>
<head>
<title>Calculator</title>
</head>
<body style="background-image: url('2089232.jpg')">
	<form method="POST">
		<label>Enter value of A :</label>
		<input type="text" placeholder="Enter any Number" name="A"/> <br><br>
		<label>Enter value of B :</label>
		<input type="text" placeholder="Enter any Number" name="B"/> <br><br>
		<input type="submit" value="+" name="submit"/>
		<input type="submit" value="-" name="submit"/>
		<input type="submit" value="x" name="submit"/>
		<input type="submit" value="/" name="submit"/>
		<input value="<?php echo $result; ?>"/>
	</form>
</body>
</html>
</center>