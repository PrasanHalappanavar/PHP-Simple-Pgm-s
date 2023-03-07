<html>
<head>
	<title>Message Reply</title>
</head>
<body>
<center>
	<form action="reply.php" method="post" style="background-image: url('2089232.jpg')">
		<input type="text" placeholder="Enter a message" name="msg"/>
		<input type="submit" name="submit" value="Send"/>
	<form>
</center>
</body>
</html>
<center>
<?php
if(isset($_POST['submit']))
{
	$ip=$_POST['reply'];
	echo $ip;
}
?>
</center>