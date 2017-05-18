<!DOCTYPE html>
<?php
    $my= new mysqli ('MYSQLCONNSTR_localdb','azure','password','modd');
    if($my->mysql_errno){
        die("MySQL, virhe yhteyden luonnissa". $my->connect_error);
    }
    $my->set_charset('utf8');
        function sec($mins){
       $arr = explode(".", $mins, 2);
       $ms = $arr[0] * 60.00;
       $ss = str_replace(",",".",$arr[1]);
       echo $ms. " ". $ss;
       $yht = $ms + $ss;
      return $yht;
    }
    $nek = $_POST['nek'];
    $kuk = $_POST['kuk'];
    $kak = $_POST['kak'];
    $sam = $_POST['sam'];
    $sav = $_POST['sav'];
    $kasa = $_POST['kasa'];
    $kosa = $_POST['kosa'];
    $nesa = $_POST['nesa'];
    $kua = $_POST['kua'];
    $kaha = $_POST['kaha'];
    $saa = $_POST['saa'];
    $kasaa = $_POST['kasaa'];
    $kusa = $_POST['kusa'];
    $kahsa = $_POST['kahsa'];
    $tuhat = $_POST['tuhat'];
    $tuhav = $_POST['tuhav'];
    $katu = $_POST['katu'];
    $kotu = $_POST['kotu'];
    $kork = $_POST['kork'];
    $sei = $_POST['sei'];
    $pit = $_POST['pit'];
    $kl = $_POST['kl'];
    $kuul = $_POST['kuul'];
    $kiek = $_POST['kiek'];
    $mouk = $_POST['mouk'];
    $kei = $_POST['kei'];
    $pal = $_POST['pal'];
    echo $nek;
    if($nek){
    $sqlup = "UPDATE $tietok SET 40m ='$nek', 60m='$kuk', 80m='$kak', 100m='$sam', 150m='$sav', 200m='$kasa', 300m='$kosa', 400m='$nesa',"
            . "60a='$kua', 80a='$kaha', 100a='$saa', 200a='$kasaa', 600m='$kusa',"
            . "800m='$kahsa',1000m='$tuhat',1500m='$tuhav',2000m='$katu',3000m='$kotu',"
            . "korkeus='$kork',seiväs='$sei',pituus='$pit',kolmiloikka='$kl',kuula='$kuul',kiekko='$kiek',moukari='$mouk',keihäs='$kei',pallo='$pal' WHERE 1;";
    echo $sqlup;
    if($tullos = $my->query($sqlup)){
        echo "Tallennettu";
    }
    else{
        echo "ei Tallennettu";
    }
    }
    $sql = "SELECT * FROM $tietok";
    $tulost = $my->query($sql);
    while($rivi = $tulost->fetch_assoc()){
        $neky = $rivi['40m'];
        $kuky = $rivi['60m'];
        $kaky = $rivi['80m'];
        $sata = $rivi['100m'];
        $sav = $rivi['150m'];
        $ksa = $rivi['200m'];
        $kosa = $rivi['300m'];
        $nesa = $rivi['400m'];
        $kua = $rivi['60a'];
        $kaha = $rivi['80a'];
        $saa = $rivi['100a'];
        $kaa = $rivi['200a'];
        $kusa = $rivi['600m'];
        $kasa = $rivi['800m'];
        $tuhat = $rivi['1000m'];
        $tuhav = $rivi['1500m'];
        $katu = $rivi['2000m'];
        $kotu = $rivi['3000m'];
        $kork = $rivi['korkeus'];
        $sei = $rivi['seiväs'];
        $pit = $rivi['pituus'];
        $kl = $rivi['kolmiloikka'];
        $kuula = $rivi['kuula'];
        $kiekko = $rivi['kiekko'];
        $moukari = $rivi['moukari'];
        $keihäs = $rivi['keihäs'];
        $pallo = $rivi['pallo'];
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Custom styles for this template -->
        <title>Yleisurheilutaitaja</title>
        <style>
            body{
                font-family: 'Roboto', sans-serif !important;
                color: black;
            }
            .top{
            position: fixed;
            top: 25px;
            }
            .buttons{
                left: 10%;
                top: 7px;
            }
            </style>
    </head>
    <body>
        
        <div class="container"  id="pj">
            <div class="buttons navbar navbar-fixed-top">
                <a href="#pj" class="btn btn-info" class="top">Pika</a>
                <a href="#kl" class="btn btn-info" class="top">Kest</a>
                <a href="#hl" class="btn btn-info" class="top">Hypyt</a>
                <a href="#heil" class="btn btn-info" class="top">Heitot</a>
            </div>
            <h1 style="margin-top: 40px;">Muuta tuloksia</h1>
            <form method="post">
                <h2>Pikajuoksut</h2>
                    
                <div class="form-group">
  <label for="nek">40 Metriä</label>
  <input type="text" class="form-control" id="nek" name="nek" value="<?php echo $neky;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="kuk">60 Metriä</label>
  <input type="text" class="form-control" id="kuk" name="kuk" value="<?php echo $kuky;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="kak">80 Metriä</label>
  <input type="text" class="form-control" id="kak" name="kak" value="<?php echo $kaky;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="sam">100 Metriä</label>
  <input type="text" class="form-control" id="sam" name="sam" value="<?php echo $sata;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="sav">150 Metriä</label>
  <input type="text" class="form-control" id="sav" name="sav" value="<?php echo $sav;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="kasa">200 Metriä</label>
  <input type="text" class="form-control" id="kasa" name="kasa" value="<?php echo $ksa;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="kosa">300 Metriä</label>
  <input type="text" class="form-control" id="kosa" name="kosa" value="<?php echo $ksa;?>"> Sekuntia
</div>
                          <div class="form-group">
  <label for="nesa">400 Metriä</label>
  <input type="text" class="form-control" id="nesa" name="nesa" value="<?php echo $nesa;?>"> Minuuttia
</div>
                                      <div class="form-group">
  <label for="kua">60 Metrin aidat</label>
  <input type="text" class="form-control" id="kua" name="kua" value="<?php echo $kua;?>"> Sekuntia
</div>
                                      <div class="form-group">
  <label for="kaha">80 Metrin aidat</label>
  <input type="text" class="form-control" id="kaha" name="kaha" value="<?php echo $kaha;?>"> Sekuntia
</div>
                                      <div class="form-group">
  <label for="saa">100 Metrin aidat</label>
  <input type="text" class="form-control" id="saa" name="saa" value="<?php echo $saa;?>"> Sekuntia
</div>
                                      <div class="form-group"  id="kl">
  <label for="kasaa">200 Metrin aidat</label>
  <input type="text" class="form-control" id="kasaa" name="kasaa" value="<?php echo $kaa;?>">Sekuntia
</div>
                <h2>Kestävyyslajit</h2> 
                        <div class="form-group">
  <label for="kusa">600 Metriä</label>
  <input type="text" class="form-control" id="kusa" name="kusa" value="<?php echo $kusa;?>"> Minuuttia
</div>
                                   <div class="form-group">
  <label for="kahsa">800 Metriä</label>
  <input type="text" class="form-control" id="kahsa" name="kahsa" value="<?php echo $kasa;?>"> Minuuttia
</div>
                                   <div class="form-group">
  <label for="tuhat">1000 Metriä</label>
  <input type="text" class="form-control" id="tuhat" name="tuhat" value="<?php echo $tuhat;?>"> Minuuttia
</div>
                                   <div class="form-group">
  <label for="tuhav">1500 Metriä</label>
  <input type="text" class="form-control" id="tuhav" name="tuhav" value="<?php echo $tuhav;?>"> Minuuttia
</div>
                                   <div class="form-group">
  <label for="katu">2000 Metriä</label>
  <input type="text" class="form-control" id="katu" name="katu" value="<?php echo $katu;?>"> Minuuttia
</div>
                                   <div class="form-group"  id="hl">
  <label for="kotu">3000 Metriä</label>
  <input type="text" class="form-control" id="kotu" name="kotu" value="<?php echo $kotu;?>"> Minuuttia
</div>
                <h2>Hyppylajit</h2>
                                 <div class="form-group">
  <label for="kork">Korkeus</label>
  <input type="text" class="form-control" id="kork" name="kork" value="<?php echo $kork;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="sei">Seiväs</label>
  <input type="text" class="form-control" id="sei" name="sei" value="<?php echo $sei;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="pit">Pituus</label>
  <input type="text" class="form-control" id="pit" name="pit" value="<?php echo $pit;?>"> Cm
</div>
                                          <div class="form-group"  id="heil">
  <label for="kl">Kolmiloikka</label>
  <input type="text" class="form-control" id="kl" name="kl" value="<?php echo $kl;?>"> Cm
</div>
                <h2>Heittolajit</h2>
                                          <div class="form-group">
  <label for="kuul">Kuula</label>
  <input type="number" class="form-control" id="kuul" name="kuul" value="<?php echo $kuula;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="kiek">Kiekko</label>
  <input type="number" class="form-control" id="kiek" name="kiek" value="<?php echo $kiekko;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="mouk">Moukari</label>
  <input type="number" class="form-control" id="mouk" name="mouk" value="<?php echo $moukari;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="kei">Keihäs</label>
  <input type="number" class="form-control" id="kei" name="kei" value="<?php echo $keihäs;?>"> Cm
</div>
                                          <div class="form-group">
  <label for="pal">Pallo</label>
  <input type="number" class="form-control" id="pal" name="pal" value="<?php echo $pallo;?>"> Cm
</div>
                  <button type="submit" class="btn">Päivitä</button>
            </form>
            <form method="post">
                <button class="btn btn-info" name="status" value="0">Palaa</button>
            </form>
        </div>
              <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <!--<script>window.jQuery || document.write('https://code.jquery.com/jquery-3.2.1.js')</script>
    -->
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>