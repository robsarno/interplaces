<?php

$BASE_WEBSITE="https://api.foursquare.com/v2/venues/";
$CLIENT_ID="TLP33XZ2XLGU2SKN50SPMU40MAXDUELATV45VPPPGRLSQEQE";
$CLIENT_SECRET="STCQN42LRMGGPTOGG5UQGNXACRDGWWYSNOYAL2PKJPMFYBVU";

$URL=$BASE_WEBSITE.'search?client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&v='.date("Ymd").'&near=Bergamo';

//$update=file_get_contents($URL);
//$update=json_decode($update,TRUE);

$venue_name=$update['response']['venues'][0]['name'];
$venue_loc_lat=$update['response']['venues'][0]['location']['lat'];
$venue_loc_long=$update['response']['venues'][0]['location']['long'];
$venue_hereNow=$update['response']['venues'][0]['hereNow']['count'];
//echo $venue_name;

?>
<html>
  <head>
    <title>Interplaces</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary justify-content-between">
      <div class="container">
        <a class="navbar-brand">InterPlaces</a>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <select class="form-control mr-sm-2">
            <option>Caffè</option>
            <option>Divertimento</option>
            <option>Pizzerie</option>
          </select>
          <button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Cerca</button>
        </form>
      </div>
    </nav>
    <div class="container">
      <!--ricerca, trova, get in touch-->
    </div>
  </body>
</html>
