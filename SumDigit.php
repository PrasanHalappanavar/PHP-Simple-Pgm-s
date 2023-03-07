<?php
	$sum=0;
	if(isset($_POST['submit']))
	{
		$n=$_POST['num'];
		while($n>0)
		{
			$r=$n%10;
			$sum=$sum+$r;
			$n=$n/10;
		}
	}
?>

<html>
<head>
	<title>Sum Of Digits</title>
</head>
<body><center><h2>Sum Of Digits</h2>
	<form method="post">
		<input type="text" placeholder="Enter Any Number" name="num"/><br><br>
		<input type="submit" name="submit" value="Calculate"/><br><br>
		<input type="text" name="sum" value="<?php echo $sum; ?>" readonly/>
	<form>
</center>
</body>
</html>

