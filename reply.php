<html>
<head>
	<title>Message Reply</title>
</head>
<body>
<center>
	<form action="msg.php" method="post" style="background-image: url('2089232.jpg')">
		<input placeholder="Enter a message" name="reply"/>
		<input type="submit" name="submit" value="Send"/>
	<form>
</center>
</body>
</html>
<center>
<?php
	echo "The Receiver Side ==>".$_POST['msg'];
?>
</center>