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
       echo $yht;
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
    /*echo $sqlup;
   */ if($tullos = $my->query($sqlup)){
        echo "Tallennettu";
    }
    else{
        echo "ei Tallennettu";
    }
    }
    $sql = "SELECT * FROM $tietok";
    echo $sql;
    $tulost = $my->query($sql);
    while($rivi = $tulost->fetch_assoc()){
        $neky = $rivi['40m'];
        $kuky = $rivi['60m'];
        $kaky = $rivi['80m'];
        $sata = $rivi['100m'];
        $sav = $rivi['150m'];
        $ksa = $rivi['200m'];
        $kosa = $rivi['300m'];
        $nesa = sec($rivi['400m']);
        $kua = $rivi['60a'];
        $kaha = $rivi['80a'];
        $saa = $rivi['100a'];
        $kaa = $rivi['200a'];
        $kusa = sec($rivi['600m']);
        $kasa = sec($rivi['800m']);
        $tuhat = sec($rivi['1000m']);
        $tuhav = sec($rivi['1500m']);
        $katu = sec($rivi['2000m']);
        $kotu = sec($rivi['3000m']);
        $kork = $rivi['korkeus'];
        $sei = $rivi['seiväs'];
        $pit = $rivi['pituus'];
        $kl = $rivi['kolmiloikka'];
        $kuula = $rivi['kuula'] / 100;
        $kiekko = $rivi['kiekko'] / 100;
        $moukari = $rivi['moukari'] / 100;
        $keihäs = $rivi['keihäs'] / 100;
        $pallo = $rivi['pallo'] / 100;
    }
    if($neky != "")
    $neky = round(1010/($neky/5.36)**5.2632 - 10);
    if($kuky != "")
    $kuky = round(1010/($kuky/7.38)**4.7619 - 10);
    if($kaky != "")
    $kaky = round(1010/($kaky/9.43)**4.5455 - 10);
    if($sata != "")
    $sata = round(1010/($sata/11.41)**4.6512 -10);
    if($sav != "")
    $sav = round(1010/($sav/17.21)**4.4444 - 10);
  if($ksa != "")
    $ksa = round(1010/($ksa/23.09)**4.3478 - 10);
  if($kosa != "")  
  $kosa = round(1010/($kosa/37.25)**4.0816 - 10);
if($nesa != "")  
  $nesa = round(1010/($nesa/51.59)**3.9216 - 10);
if($kua != "")
$kua = round(1010/($kua/8.57)**3.2258 - 10);
if($kaha != "")
$kaha = round(1010/($kaha/11.07)**3.2258 - 10);
if($saa != "")
$saa = round(1010/($saa/13.62)**3.2258 - 10);
if($kaa != "")
$kaa = round(1010/($kaa/26.69)**3.5088 - 10);
if($kusa != "")
$kusa = round(1010/($kusa/86.48)**4 - 10);
if($kasa != "")
$kasa = round(1010/($kasa/120.83)**4 - 10);
if($tuhat != "")   
$tuhat = round(1010/($tuhat/156.99)**4 - 10);
if($tuhav != "")
$tuhav = round(1010/($tuhav/247.03)**3.9216 - 10);
if($katu != "")
$katu = round(1010/($katu/344.2)**3.8462 - 10);
if($kotu != "")
$kotu = round(1010/($kotu/534.16)**3.7736 - 10);
if($kork != "")
$kork = round(1010/(194.45/$kork)**2.9412 - 10);
if($sei != "")
$sei = round(1010/(437.5/$sei)**1.9417 - 10);
if($pit != "")
$pit = round(1010/(676.5/$pit)**2.439 - 10);
if($kl != "")
$kl = round(1010/(13.94/$kl)**2.5316 - 10);
if($kuula != "")
$kuula = round(1010/(18.28/$kuula)**1.2195 - 10);
if($kiekko != "")
$kiekko = round(1010/(60.38/$kiekko)**1.1765 - 10);
if($moukari != "")
$moukari = round(1010/(62.58/$moukari)**1.0309 - 10);
if($keihäs != "")
$keihäs = round(1010/(71.02/$keihäs)**1.1765 - 10);
if($pallo != "")
$pallo = round(1010/(95.94/$pallo)**1.4493 - 10);

$sqlpup = "UPDATE $tietop SET 40m ='$neky', 60m='$kuky', 80m='$kaky', 100m='$sata', 150m='$sav', 200m='$ksa', 300m='$kosa', 400m='$nesa',"
            . "60a='$kua', 80a='$kaha', 100a='$saa', 200a='$kaa', 600m='$kusa',"
            . "800m='$kasa',1000m='$tuhat',1500m='$tuhav',2000m='$katu',3000m='$kotu',"
            . "korkeus='$kork',seiväs='$sei',pituus='$pit',kolmiloikka='$kl',kuula='$kuula',kiekko='$kiekko',moukari='$moukari',keihäs='$keihäs',pallo='$pallo' WHERE 1;";
    if($pullos = $my->query($sqlpup)){
        echo "Tallennettu";
    }
    $sqlpj = "SELECT * FROM $tietop";
    $pikam = array('40m','60m','80m','100m','150m','200m','300m','400m','60a','80a','100a','200a');
    $kestm = array('600m','800m','1000m','1500m','2000m','3000m');
    $hypl = array('korkeus','seiväs','pituus','kolmiloikka');
    $heitl = array('kuula','kiekko','moukari','keihäs','pallo');
     $tuloss = $my->query($sqlpj);
    while($ri = $tuloss->fetch_assoc()){
        $pikalop = "40m";
        $pikaiso = $ri['40m'];
        foreach ($pikam as $i){
          if($ri[$i] > $pikaiso && $ri[$i] != ''){
              $pikaiso = $ri[$i];
              $pikalop = $i;
          }  
        }
        $kestlop = "600m";
        $kestiso = $ri['600m'];
        foreach ($kestm as $j){
          if($ri[$j] > $kestiso && $ri[$j] != ''){
              $kestiso = $ri[$j];
              $kestlop = $j;
          }  
        }
        $hyplop = "korkeus";
        $hypiso = $ri['korkeus'];
        foreach ($hypl as $y){
          if($ri[$y] > $hypiso && $ri[$y] != ''){
              $hypiso = $ri[$y];
              $pikalop = $y;
          }  
        }
        $heilop = "kuula";
        $heiiso = $ri['kuula'];
        foreach ($heitl as $k){
          if($ri[$k] > $heiiso && $ri[$k] != ''){
              $heiiso = $ri[$k];
              $heilop = $k;
          }  
        }
    }
    $pikan = "";
    $pikat = max($neky,$kuky,$kaky,$sata,$sav,$ksa,$nesa,$kua,$kaa);
    $kest = max($kusa,$kasa,$tuhat,$tuhav,$katu,$kotu);
    $hyp = max($kork,$sei,$pit,$kl);
    $heit = max($kuula,$kiekko,$moukari,$keihäs,$pallo);
    if(!$pikat || !$kest || !$hyp || !$heit)
        $var = "Kaikista lajiryhmistä ei ole tuloksia!";
    $kokpist = $pikat + $kest + $hyp + $heit;
    $keska = $kokpist / 4;
    $tasoitus = -$kokpist/100 + 41;
    if($pikaiso >= $keska){
        $pityyli = "eslahy";
    }
    else{
        $pityyli = "eslahu";
    }
    if($kestiso >= $keska){
        $ketyyli = "eslahy";
    }
    else{
        $ketyyli = "eslahu";
    }
    if($hypiso >= $keska){
        $hytyyli = "eslahy";
    }
    else{
        $hytyyli = "eslahu";
    }
    if($heiiso >= $keska){
        $heityyli = "eslahy";
    }
    else{
        $heityyli = "eslahu";
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
            li {
    list-style-type: none;
}
              .bord
   {background-color: white;
   font-weight: 700;
                   text-align: center;
                   font-size: 25px;
                    transition: border 0.5s;
                     padding-top: 16px;
                   padding-bottom: 16px;
             box-sizing: border-box;
             letter-spacing: 1px;
                 color: #008FCB;
                 height: 55px;
   }
   .tai{
        color: white;
        text-shadow: 4px 4px 8px #000000;
   }
   .alat{
        color: white;
        text-shadow: 4px 4px 8px #000000;
   }
            .logo{
                max-height: 40px;
                 display: block;
    margin-left: auto;
    margin-right: auto; 
            }
            .bord{
                background-color: white;
            }
            .bord :hover{
                background-color: #008FCB;
            }
             .linkki {color: black;
                      height: 60px;
                     }
            .linkki :hover {color:#00b8e6;}
            .linkki :visited {color: white;}
            .hov :hover{
                  background-color: #008FCB;
            }
            .etula{
                margin-top: 70px;
                background-color: white;
                text-align: center;  
            }
            .esla{
                box-shadow: 3px 3px 1px #888888;
            }
            .banner{
                margin-top: 130px;
                background-color: #005EA8;
                text-align: center;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Centro_Deportivo_Xochimilco_10.JPG/1280px-Centro_Deportivo_Xochimilco_10.JPG");
                background-position: 0 -600px;
            }
            .ktkuva{
                max-height: 250px;
                 display: block;
    margin-left: auto;
    margin-right: auto; 
            }
            .laji{
                margin-top: 150px;
                margin-bottom: 50px;
                text-align: center;
            }
            .seuraa{
                text-align: right;
                color: #008FCB;
            }
            .tietoa{
                margin-top: 100px;
            }
            .ytot{
                text-align: center;
            }
            .tasot {
                text-align: center;
            }
            .yleisurheilu{
                margin-top: 200px;
                margin-bottom: 200px;
            }
            .nappi{
                margin-top: 10px;
            }
            .naav{
                background-color: white;
                border-style: solid;
    border-width: 0px 0px 1px 0px;
            }
            .linkit{
                margin-top: 200px;
                text-decoration: none;
                text-align: center;
                font-size: 25px;
            }
            a:hover {
    text-decoration: none;
}
.navp{
    width: 50px;
    position: absolute;
    right: 20px;
}
.nappi{
    background-color:#008FCB;
    color: white;
}
.tiedot{
}
.eslahy{
    background-color: #89C53F;
    padding-top: 20px;
    padding-bottom: 10px;
    margin-bottom: 10px;
     box-shadow: 3px 3px 1px #888888;
}
.eslahu{
    background-color: #C20916;
    padding-top: 20px;
    padding-bottom: 10px;
    margin-bottom: 10px;
     box-shadow: 3px 3px 1px #888888;
}
.kokt{
    text-align: center;
}
.kt{
    
}
.ktl{
     background-color: #EE7F00;
    padding-top: 20px;
    padding-bottom: 10px;
     box-shadow: 2px 2px 1px #888888;
}
.yut{
    margin-top: 150px;
}
.seuk{
    margin-top: 50px;
    text-align: center;
}
.skot{
    background-color: #EE7F00;
}
.skt{
    background-color: #89C53F;
}

            </style>
    </head>
    <body>
          <nav class="navbar navbar-toggleable-md navbar-fixed-top naav">
  <div class="container" style="margin: 0; width: 100%;" >
  <!--<div class="row" style="width: 100%;">-->
  <button class="btn dropdown-toggle visible-sm-lg navp" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style='margin-top: 10px;'>
    III
  </button>
 <a href="#es" class='linkki navbar-brand'><img class="logo" src="http://cosmo.kpedu.fi/~T2017051003/SUL_logo_vaaka_RGB%20sininen.jpg" alt="Logo"></a>
  <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%;">
    <ul class="navbar-nav row" style="width: 100%; text-align: center;">
<li class='nav-item col-sm-3'><a href="#es" class='linkki' data-toggle="collapse" data-target="#navbarNav"><div class='hov nav-item col-sm-3 bord'>Etusivu</div></a></li>
<li class='nav-item col-sm-3'><a href="#lajit" class='linkki' data-toggle="collapse" data-target="#navbarNav"><div class='hov nav-item col-sm-3 bord'>Lajit</div></a></li>
<li class='nav-item col-sm-3'><a href="#tieto" class='linkki' data-toggle="collapse" data-target="#navbarNav"><div class='hov nav-item col-sm-3 bord'>Yleistä</div> </a></li>
<li class='nav-item col-sm-3'><a href="#tietok" class='linkki' data-toggle="collapse" data-target="#navbarNav"><div class='hov nav-item col-sm-3 bord'>Yleisurheilu</div></a></li>
     </ul>
  </div>
  </div>
</nav>


            <div class="container-fluid"  id="es">
                <div class="container banner">
                    
                        <img class="img-responsive logo" src="http://cosmo.kpedu.fi/~T2017051003/Yleisurheilu_logo_RGB%20sininen.jpg" alt="Logo">
                    <h1 class="tai">Yleisurheilutaitaja <?php  ?></h1>
                    <h2 class="alat">Tarkkaile edistystäsi yleisurheilussa</h2>
                </div>
                            <form method="post">
<button class="lopeta btn btn-secondary" name="removecookie" value=1 >Kirjaudu ulos</button></form>
                <div class="container etula">
                    <div class="row">
                    <div class="col-md-3">
                    <div class="<?php echo $pityyli;?>">
                        <h2 class="heio">Pikajuoksut, paras <?php echo $pikalop; ?></h2>
                        <h2 class="lajit"><?php echo $pikaiso;?></h2>
                    </div>
                    </div>
                    <div class="col-md-3"><div class="<?php echo $ketyyli;?>">
                        <h2 class="heio">Kestävyyslajit , paras <?php echo $kestlop; ?></h2>
                        <h2 class="lajit"><?php echo $kestiso;?></h2>
                    </div>
                </div>
                    <div class="col-md-3"><div class="<?php echo $hytyyli;?>">
                        <h2 class="heio">Hypyt, paras <?php echo $hyplop; ?></h2>
                        <h2 class="lajit"><?php echo $hypiso;?></h2>
                    </div>
                    </div>
                                            <div class="col-md-3"><div class="<?php echo $heityyli;?>">
                        <h2 class="heio">Heitot, paras <?php echo $heilop; ?></h2>
                        <h2 class="lajit"><?php echo $heiiso;?></h2>
                    </div>
                    </div>
                    </div>
                    <div class="kokt">
                        <h2 class="kt">Kokonaistasoituksesi</h2>
                        <h1 class="ktl"> <?php if(!$var)echo round($tasoitus);
                        else echo $var;?></h1>
                        <img class="ktkuva img-responsive" src="http://cosmo.kpedu.fi/~T2017051003/vo_rentoutuminen.jpg" alt="ktkuva">
                        <h1 class="kommentti">Tasosi on: Aloittelija - Voit urheilla vielä enemmän!</h1>
                    </div>
                </div>
                <?php 
                $laji = $_POST['laji'];
                ?>
                <div id='lajit'></div>
                <div class="container laji" >
                    <form method="post" action='#lajit' class='lajiv'>
                        <label for='laji'>Valitse lajiryhmä</label>
                        <select class='form-control' id='laji' name='laji'>
                            <option>Pikajuoksut</option>
                            <option>Kestävyyslajit</option>
                            <option>Hypyt</option>
                            <option>Heitot</option>
                        </select>
                        <button class='btn nappi' type='submit'>Valitse</button>
                        </form>
                    <h1 class="lajiots"><?php 
                    if($laji){
                        echo $laji;
                    }
                    else {
                        echo "Heitot";}?></h1>
                    <h2 class="lajit">40</h2>
                    <h2 class="lajit">Menneet tapahtumasi</h2>
                    <div class="lajitulokset">
                         <div class="table-responsive">          
    <table class="table">
    <thead>
        <tr class="skot">
            <th>Laji</th>
            <th>Päivä</th>
            <th>Tulos</th>
            <th>Muutos</th>
        </tr>
    </thead>
        <tr class="skt">
            <th>Kuulantyöntö</th>
            <th>12.5.2017</th>
            <th>9.34</th>
            <th> + 3%</th>
        </tr>
    </table>
                    </div>
                        <div class="row">
                            <form method="post">
                            <div class="col-md-2">
                                <button class="btn nappi" name="status" value="1">
                                     Muuta tuloksia
                                </button>
                            </div>
                            </form>
                            <div class="col-md-8">
                               <img class="ktkuva img-responsive" src="http://cosmo.kpedu.fi/~T2017051003/uusikuula1.jpg" alt="ktkuva"> 
                            </div>
                            <form action ="kos.php" method="post">
                            <div class="col-md-2">
                                <button class="btn nappi">
                                    Kaikki kilpailut
                                </button>
                            </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="seuraa">12/15</h2></div>
                                <div class="col-md-9">
                                    <h2 class="seuraatext">Seuraava taso: urheilumestari</h2></div>
                        </div>
                    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
  aria-valuemin="0" aria-valuemax="100" style="width:80%; background-color: #89C53F;">
  </div>
</div>
                </div>
                    </div>
                            </div>
                <div id='tieto'></div>
                <div class='container-fluid tiedot'>
                <div class="container tietoa">
                    <h1 class="ytot">Tietoa</h1>
                    <h1 class="tasot">
                        Miten tasoitus toimii:
                    </h1>
                    <p class="tast">
                        Tasoitus perustuu hyvin monimutkaiseen ja lajikohtaiseen laskukaavaan, joka kerrotaan huomenna
                    </p>
                    <h1 class="seuk">
                        Seuraavat kilpailut:
                    </h1>
                                      <div class="table-responsive">          
    <table class="table">
    <thead>
        <tr class="skot">
            <th>Kilpailu</th>
            <th>Päivä</th>
            <th>Paikka</th>
            <th>Lajit</th>
        </tr>
    </thead>
        <tr class="skt">
            <th>Helsingin kisat</th>
            <th>19.5.2017</th>
            <th>Olympiastadioni</th>
            <th>Keihäänheitto, 100m juoksu, kuulantyöntö</th>
        </tr>
        <tr class="skt">
            <th>Helsingin kisat</th>
            <th>19.5.2017</th>
            <th>Olympiastadioni</th>
            <th>Keihäänheitto, 100m juoksu, kuulantyöntö</th>
        </tr>
        <tr class="skt">
            <th>Helsingin kisat</th>
            <th>19.5.2017</th>
            <th>Olympiastadioni</th>
            <th>Keihäänheitto, 100m juoksu, kuulantyöntö</th>
        </tr>
    </table>
                    </div>
                </div>
                <div id='tietok' style="margin-top: 100px;"></div>
                <div class="container yleisurheilu">
                    <h1 class="ytot">Tietoa yleisurheilusta</h1>
                    <p class='yut'>
                        Yleisurheilu on monipuolinen ja mielenkiintoinen harrastus, josta kuka tahansa voi löytää iloa.
                    </p>
                    <div class='linkit'>
                        <p>
                            <a href='http://www.yleisurheilu.fi/'>Yleisurheilu.fi</a></p>
                                    <p><a href='http://www.yleisurheilu.fi/'>Harjoitteluvideoita</a></p>
                                                
                            </div>
                </div>
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
