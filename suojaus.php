<?php
$lopeta = $_POST['removecookie'];
if(!$lopeta)
{
    $lopeta = 0;
}
$status = 0;
if($_POST['status']){
    $status = $_POST['status'];
}
$tietok = "";
$tietop = "";
$ny = "taina";
$py = "salaisuus1";
$nk = "pekka";
$pk = "salaisuus2";
$nimi = $_POST['tunnistusnimi'];
$ss = $_POST['salasana'];
if($lopeta == 1){
/*echo "etstsdtstsd";
setcookie("joku","a", time() - 36000);*/
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
}

if(($nimi == $ny && $ss == $py)  || ($nimi == $nk && $ss == $pk)){
setcookie("joku",$nimi, time() + 3600,'/');
}

if(isset($_COOKIE["joku"]) || ($nimi == $ny && $ss == $py)  || ($nimi == $nk && $ss == $pk)){
if($lopeta != 1){
            if($_COOKIE["joku"] == "taina" || $nimi == "taina")
            {
                $tietok = "tainatulos";
                $tietop = "tainp";
            }
            else if($_COOKIE["joku"] == "pekka" || $nimi == "pekka")
            {
                $tietok = "pekkatulos";
                $tietop = "pekp";
            }
    if($status == 0){
include 'testi_1.php';
    }
    else if($status == 1){
        include 'tos.php';
    }
}
else{
echo "<form method='post'>
Tunnus:
<br><input type='text' name='tunnistusnimi'>
<br>Salasana:
<br><input type='password' name='salasana'>
<br><button type='submit'>Lähetä</button>
</form>";}
}
else{
echo "<form method='post'>
Tunnus:
<br><input type='text' name='tunnistusnimi'>
<br>Salasana:
<br><input type='password' name='salasana'>
<br><button type='submit'>Lähetä</button>
</form>";}
?>

