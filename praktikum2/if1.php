<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $d = date("D");
    $date = date("d-m-y H:i:s");
    if($d =="Mon"){
        $d = "senin";
        echo "Selamat belajar <br>";
    }
    else 
        echo "Ini hari $d<br>";
        echo $d . " " . $date;
    
    ?>

</body>
</html>;
