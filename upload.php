<html>
<head>
<title>PHP</title>    
</head>
    <body>
    <?php 
        $dir = "uploads/";
        $n = basename($_FILES["theimage"]["name"]);
        $pathinfo = pathinfo($n,PATHINFO_EXTENSION);
        $check = getimagesize($n);
        echo $check;
        ?>
    </body>
</html>