<!DOCTYPE html>
<?php
    $my= new mysqli ('localhost','T2017051003','cbc87e4b5c','T2017051003');
    if($my->mysql_errno){
        die("MySQL, virhe yhteyden luonnissa". $my->connect_error);
    }
    $my->set_charset('utf8');
    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
        <title></title>
    </head>
    <body>
        <div class="container">
            <img style="width: 600px;"src="http://yleisurheilutaitaja.azurewebsites.net/Taitaja2017_logojpeg.jpg" alt="taitajalogo">
            <div class="row">
                <div class="col-md-6">
                    mufsnofuanuofnadonasdofnodasfuoo
                    <h1>Jotaininisfdnisfnid</h1>
                </div>    
                <div class="col-md-6">
                    <h1>Joteioptnaoåtnaåginoåao</h1>
            
                </div>
            </div>
                    
                </div>
        <?php
        echo "jotain ja muurta";
        ?>
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
