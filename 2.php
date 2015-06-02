<!doctype html>
<html>
<head>
<title>Hypertext Preprocessor</title>
</head>
<body>
<form>
Wlcome
<?php 
// here is the script of Php
echo "Hello World!!! <br>";
$x = 5+12.5;
$c = 'I am a cool Boy';
echo $x . " is a great No<br>";
echo "<input placeholder='yo'></input><br>";
var_dump($x);echo "<br>";
echo strlen('I am a cool Boy');echo "<br>";
echo "no of Words are ".str_word_count($c);echo "<br>";
echo strrev($c);echo "<br>";
echo strpos($c, "Boy");echo "<br>";
echo str_replace("Boy", "Ninja!!", $c)."<br>";
define("yo", " X Blaster!!!!",true);
echo yo;
$r = date("H");
if ( $r > 10) {echo "alert";};
$fc = "re";echo "<br>";
switch($fc) {case "red": echo "Your Favourite Color is red";break;default :echo "Booooo!!!";break;};
?>
</body>
</html>