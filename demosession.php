<?php 
session_start();
function customError($errno,$errstr) {
    echo "Error ".$errstr;
    die();
}
?>
<html>
<title>session 1</title>
<body>

<?php 
  $_SESSION["favcolor"] = "red";
  $_SESSION["tree"] = "olive";
    echo "Variables are set";echo "<br>";
  $oo = "2";echo "<br>";
  echo "Incorrect : ".$oo;echo "<br>";
  $oof = filter_var ($oo, FILTER_SANITIZE_STRING);echo "<br>";
  echo $oof;echo "<br>";
  $ooi = filter_var($oo, FILTER_VALIDATE_INT);echo "<br>";
    if ($ooi == true) {echo  "Valid Integer";}
    else { echo " Bad Integer";};echo "<br>";
    set_error_handler("customError");echo "<br>";
    $er = 3;echo "<br>";
    if ($er =1) { trigger_error("Value Must be 1 or low");}; echo "<br>";
   error_log("Error: [$errno] $errstr",1,
  "vermaaakash1234@gmail.com","From: yoyo@gmail.com");
    function check($n) { if ($n > 2) { throw new Exception("Value should be greater than 2");} return true;};
    try { check(1); echo "No should be greater than 2";}
    catch(Exception $e) {
    echo "Error";
};

    ?>
</body>
</html>