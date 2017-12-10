<?php
if(isset($_GET['cosa']))
  $cosa=$_GET['cosa'];
else {
  //alert("Errore nei parametri inseriti");
  header("location: /index.php");
}
if(isset($_GET['dove']))
  $dove=$_GET['dove'];
else {
  //alert("Errore nei parametri inseriti");
  header("location: /index.php");
}


$BASE_WEBSITE="https://api.foursquare.com/v2/venues/";
$CLIENT_ID="TLP33XZ2XLGU2SKN50SPMU40MAXDUELATV45VPPPGRLSQEQE";
$CLIENT_SECRET="STCQN42LRMGGPTOGG5UQGNXACRDGWWYSNOYAL2PKJPMFYBVU";

$URL=$BASE_WEBSITE.'search?client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&v='.date("Ymd").'&near='.$dove.'&query='.$cosa.'&limit=10';

$update=file_get_contents($URL);
$update=json_decode($update,TRUE);

$venue_name=$update['response']['venues'][0]['name'];
$venue_loc_lat=$update['response']['venues'][0]['location']['lat'];
$venue_loc_long=$update['response']['venues'][0]['location']['long'];
$venue_hereNow=$update['response']['venues'][0]['hereNow']['count'];

//echo $update;
//break;
?>
<html>
  <?php require("./head.php")?>
  <body>
    <?php require("./nav.php")?>
    <br>
    <div class="container-fluid">
      <h5 class="text-center">Ecco i risultati per <b><?php echo $cosa; ?></b> vicino a <b><?php echo $dove; ?></b></h5>
      <hr>
      <?php
      $i=0;
      $j=0;
      echo "<div class=\"card-group\">";
      $update=$update['response'];
      foreach ($update['venues'] as $key=>$venue)
      {
        //venue info
        $venue_id=$venue['id'];
        $venue_name=$venue['name'];
        $venue_loc_lat=$venue['location']['lat'];
        $venue_loc_long=$venue['location']['long'];
        $venue_hereNow=$venue['hereNow']['count'];
        $venue_phone=$venue['contact']['phone'];
        if($venue_phone=="")
          $venue_phone="-";
        $venue_address=$venue['location']['address'];
        if($venue_address=="")
          $venue_address="-";

        //ricerca foto
        $URL=$BASE_WEBSITE.$venue_id.'/photos?client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&v='.date("Ymd");
        $update=file_get_contents($URL);
        $update=json_decode($update,TRUE);
        if($update['response']['photos']['count']>0)
          $venue_photo='https://igx.4sqi.net/img/general/'.$update['response']['photos']['items'][0]['width'].'x'.$update['response']['photos']['items'][0]['height'].$update['response']['photos']['items'][0]['suffix'];
        else
        {
          $venue_photo="https://www.gumtree.com/static/1/resources/assets/rwd/images/orphans/a37b37d99e7cef805f354d47.noimage_thumbnail.png";
        }
        //echo $venue_photo;
        if($i%4==0)
        {
          echo "<div class=\"row\">";
          $j=0;
        }
        echo "<div class=\"col-md-3\">
                <div class=\"card\">
                  <img class=\"card-img-top\" src=\"$venue_photo\" alt=\"Immagine del luogo\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">$venue_name</h4>
                  </div>
                  <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\"><b>Telefono: </b>$venue_phone</li>
                    <li class=\"list-group-item\"><b>Indirizzo: </b>$venue_address</li>
                    <li class=\"list-group-item\"><b>Auttualmente qua </b>$venue_hereNow persone</li>
                  </ul>
                </div>
              </div>";

        if($j==3)
          echo "</div><br>";

        $i++;
        $j++;
      }
      echo "</div>";
      ?>
    </div>
  </body>
</html>