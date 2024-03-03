<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bulletin scolaire</title>
</head>
<body>
    <form action="index.php" method="post" >
    <input type="text" name="dic" placeholder="المواظبة والسلوك"><br>
    <input type="text" name="ei" placeholder="التربية الإسلامية"><br>
    <input type="text" name="aei" placeholder="التربية الإسلامية:الأنشطة"><br>
    <input type="text" name="esp" placeholder="Sport"><br>
    <input type="text" name="math" placeholder="math"><br>
    <input type="text" name="ph" placeholder="الفلسفة"><br>
    <input type="text" name="aph" placeholder="الفلسفة:الأنشطة"><br>
    <input type="text" name="pc" placeholder="physique chimie"><br>
    <input type="text" name="apc" placeholder="physique chimique:activité"><br>
    <input type="text" name="en" placeholder="englais"><br>
    <input type="text" name="aen" placeholder="anglais:activité"><br>
    <input type="text" name="ar" placeholder="اللغة العربية"><br>
    <input type="text" name="aar" placeholder="اللغة الغربية :الأنشطة"><br>
    <input type="text" name="fr" placeholder="français"><br>
    <input type="text" name="afr" placeholder="français:activité"><br>
    <input type="text" name="svt" placeholder="SVT"><br>
    <input type="text" name="asvt" placeholder="svt: activité"><br>
    
    <input type="submit" value="submit" name="submit">       
    </form>
</body>
</html>
<?php
    // variable

    $cdic= 1;
    $cei = 2;
    $cesp = 4;
    $cmath = 7;
    $cph = 2;
    $cpc = 7;
    $cen= 2;
    $car= 2;
    $cfr = 4;
    $csvt = 5;
    $ctotal = $cdic + $cei + $cesp + $cmath + $cph + $cpc + $cen + $car + $cfr + $csvt ;

    

    // catcule

    $mdic = (float)$_POST['dic'];
    $mei = (float)$_POST['ei'] * 0.75 + (float)$_POST['eai'] * 0.25; 
    $mesp = (float)$_POST['esp'];
    $mMath= (float)$_POST[ 'math'] ;
    $mph = (float)$_POST['ph'] * 0.75 + (float)$_POST['aph'] * 0.25;
    $mpc = (float)$_POST['pc'] * 0.75 + (float)$_POST['apc'] * 0.25;
    $men = (float)$_POST['en'] * 0.75 + (float)$_POST['aen'] * 0.25;
    $mar = (float)$_POST['ar'] * 0.75 + (float)$_POST['aar'] * 0.25;
    $mfr = (float)$_POST['fr'] * 0.75 + (float)$_POST['afr'] * 0.25;
    $msvt = (float)$_POST['svt'] * 0.75 + (float)$_POST['asvt'] * 0.25;

    // note * Coefficient

    $ncdic= $mdic*$cdic;
    $ncei= $mei*$cei;
    $ncesp =$mesp*$cesp;
    $ncmath=$mMath*$cmath;
    $ncph=$mph*$cph;
    $ncpc=$mpc*$cpc;
    $ncen=$men*$cen;
    $ncar=$mar*$car;
    $ncfr=$mfr*$cfr;
    $ncsvt=$msvt*$csvt;

    $snc=$ncdic+$ncei+$ncesp+$ncmath+$ncph+$ncpc+$ncen+$ncar+$ncfr+$ncsvt;
    $votreNote = $snc/$ctotal;

    if(isset($_POST['submit'])){
        echo "somme note X Coefficient = {$snc} <br>" ;
        echo "votre note est = {$votreNote}";
    }
?>
