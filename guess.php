<html>
<head>
	<title>Guessing Game by Vincent Monacillo</title>
</head>
<body>
	Guessing Game <br>

	by Vincent F. Monacillo <br>

<?php
$randomnumber= mt_rand(1,5);
if(isset($_POST['number_entered']))
{
	$number=$_POST['number_entered'];
}
if(isset($_POST['submit']))
{
	$submitbutton=$_POST['submit'];
}
?>

<form action="" method="POST">
Guess a Number Between 1 and 5: 
<input type="text" name="number_entered" value=''/> <br><br>

Result: 
<?php 
if (isset($submitbutton)){

	if (($number > 0) && ($number <6))
	{
		if ($number != $randomnumber)
		{
			if ( $number < $randomnumber)
				{
				echo "Incorrect guess. The correct number was higher than the required. The correct number was $randomnumber. Try again?";
				} 
				else
				{
					echo "Incorrect guess. The correct number was lower than the required. The correct number was $randomnumber. Try again?";
				}
		}
		else 
		{
			echo "$randomnumber is the correct guess. You got it right.";
		}
	}
}
?>
	<br><br>
<input type="submit" name="submit" value="Guess"/><br><br>
</form>
</body>
</html>