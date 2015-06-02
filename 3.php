<?php
$cokie_name = "Aakash";
$cokie_value = "Hero";
setcookie($cokie_name, $cokie_value, time() + (86400 * 30 ), "/")
?>
<html>
<head>
<title>PHP</title>    
</head>
    <body>
        <?php  
        $a = array(
            array("Volvo",20,24),
            array("BMW",24,90),
            array("Suzuki",30,22),
            array("Maruti",20,50)
        );
        
        $t = strtotime("+3 months");
        date_default_timezone_set("America/New_York");
        $z = $_POST["fname"];$y = $_POST["pwd"];
        if (isset($z) && $z =="aakash" && $y == "slowly")
        echo $z."<br> Welcome, Have a Good Day<br>"; 
        else { echo "Go Home !!!!<br>
        You are not a User.<br>".$a[0][2]."<BR>".date("Y-m-d h:i:s:a",$t);};echo "<br>";
        echo readfile("yo.txt");echo "<br>";
        $myfile = fopen("yo.txt","r+") or die("Unable to Open the File");
        echo fgets($myfile,filesize("yo.txt"));
        $written = "zooma the goomba";
        fwrite($myfile,$written);
        fclose($myfile);echo "<br>";
        echo readfile("yo.txt");echo "<br>";
        if (isset($_COOKIE[$cokie_name])) { echo "cokie cokie cokie... :)";} 
        else {echo "No cokie :(";};
        ?>
    </body>
</html>