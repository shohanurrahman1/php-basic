<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Practice | Home</title>
	</head>

	<body>
		<?php  

		// $name = "Shoahnur Rahman";
		// $Name = "Shohan";
		// $fullName = "Shohanur Rahman Shohan";
		// $a = 10;

		// // echo "My Name is: " . $name . " " . $Name;

		// echo var_dump($fullName);
		// echo var_dump($a);

		// $a = 10;
		// $b = 20;

		// $ans = $a + $b;
		// echo "Summation Answer is: " . $ans;

		// Conditional Operator

		// $userName = "shohanur51360@gmail.com";
		// $password = 12345;

		// if ( $userName == "shohanur51360@gmail.com" ) 
		// {
		// 	if ( $password == 12345 )
		// 	{
		// 		echo "Welcome To the Admin";
		// 	}
		// 	else 
		// 	{
		// 		echo "Ooops! Something Wrong Happens";
		// 	}
		// }
		// else 
		// {
		// 	echo "Ooops! No user name found";
		// }


		// $lifePos = 5;
		// $myPos = 25;

		// if ( $lifePos > $myPos )
		// {
		// 	$totalTime = ( $lifePos - $myPos ) * 3 + ( $myPos * 3 ) + 23;
		// 	echo "When Lift Position 15 & my Position 5 = " . $totalTime;
		// }

		// else if ( $lifePos < $myPos )
		// {
		// 	$totalTime = ( $myPos - $lifePos ) * 3 + ( $myPos * 3 ) + 23;
		// 	echo "When Lift Position 25 & my Position 5 = " . $totalTime;
		// }

		// else if ( $lifePos == $myPos )
		// {
		// 	$totalTime = ( $myPos * 3 ) + 23;
		// 	echo "When Lift Position 10 & my Position 10 = " . $totalTime;
		// }

		// Loop 
		// For, While, Do While, For each (Array)

		// For Loop

		// $number = 27;
		// for ( $i = 1; $i <= 10; $i++ )
		// {
		// 	echo $number . " * " . $i . " = " . $number * $i . "<br>";
		// }

		// $i = 1;
		// while ( $i <= 10 ) {
		// 	echo $number . " * " . $i . " = " . $number * $i . "<br>";
		// 	$i++;
		// }

		// $i = 1;
		// do {
		// 	echo $number . " * " . $i . " = " . $number * $i . "<br>";
		// 	$i++;
		// }while ( $i <= 20 )

		// Even Odd Calculation
		// for ( $i = 1; $i <= 50; $i++ )
		// {
		// 	if ( $i % 2 == 0 ) 
		// 	{
		// 		echo "$i = Number is Even" . "<br>";
		// 	}
		// 	else if ( $i % 2 != 0 ) 
		// 	{
		// 		echo "$i = Number is Odd" . "<br>";
		// 	}
		// }


		// ONE DIMENTIONAL ARRAY
		// $name = "Shohanur Rahman Shohan";
		// echo var_dump($name);

		// $names = array( "Shohan", "Masum", "Sabbir", "Shahriar", "Sujon" );
		// echo $names[0] . "<br>";
		// echo $names[1] . "<br>";
		// echo $names[2] . "<br>";
		// echo $names[3] . "<br>";
		// echo $names[4] . "<br>";


		// For Each Loop
		// $names = array( "Shohan", "Masum", "Sabbir", "Shahriar", "Sujon" );
		// foreach ($names as $value) 
		// {
		// 	echo $value . " - ";
		// }

		// Associative Array Indexing
		// $names = array (
		// 	"f_name" => "Shohanur Rahman",
		// 	"l_name" => "Shohan",
		// 	"phone" => "01731578788"
		// );

		// print_r($names); //Associative array printing purpse use this

		// Php Some Function

		// Celling
		// $a = 5.3;
		// echo ceil($a);

		// Floor
		// $a = 5.8;
		// echo floor($a);

		// Squre rote
		// $a = 26;
		// echo sqrt($a);

		// Length Found
		$name = "Shohanur Rahman Shohan";
		echo strlen($name);


		?>
	</body>
</html>