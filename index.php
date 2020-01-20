<body bgcolor="yellow">

your number (from 0 to 1000): <br> <br>

<!-- php script -->

<?php
	$random = rand(0, 1000);
	echo $random;
	echo "<br>";
	
	if($random<500){
		echo 'your number is before 500';
	}
	else{
		echo 'your number is after 500';
	}
?>

<br> <br>

click <b>F5</b> and get new number!

<br> <br>

<b>made by konradooo</b>

</body>