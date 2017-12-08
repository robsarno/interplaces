<?php

$BASE_WEBSITE="https://api.foursquare.com/v2/venues/";
$CLIENT_ID="TLP33XZ2XLGU2SKN50SPMU40MAXDUELATV45VPPPGRLSQEQE";
$CLIENT_SECRET="STCQN42LRMGGPTOGG5UQGNXACRDGWWYSNOYAL2PKJPMFYBVU";

$URL=$BASE_WEBSITE.'search?client_id='.$CLIENT_ID.'&client_secret='.$CLIENT_SECRET.'&v='.date("Ymd").'&near=Bergamo';

echo $URL;

https://api.foursquare.com/v2/venues/categories?client_id={0}&client_secret={1}&v={2}
?>
