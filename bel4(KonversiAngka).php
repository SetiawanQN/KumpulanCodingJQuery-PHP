<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name<input type="text" name="fname"/>
<input type="submit"/>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] =="POST")
{
    if ($_POST['fname']<"50")
	{
		echo " Nilainya E broo... ";
	}
    else if ($_POST['fname']<"60")
	{
		echo " Nilainya D broo... ";
	}
	else if ($_POST['fname']<"70")
	{
		echo " Nilainya C broo... ";
	}
	else if ($_POST['fname']<"85")
	{
		echo " Nilainya B broo... ";
	}
	else
	{
		echo " Nilainya A brooo... ";
	}
}
?>
</body>
</html>