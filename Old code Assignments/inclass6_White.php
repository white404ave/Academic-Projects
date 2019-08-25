<?php
if(isset($_POST['savannah']) && isset($_POST['atlanta'])){
  $departCity = urlencode($_POST['savannah']);
  $arriveCity = urlencode($_POST['atlanta']);
  $apiKey = 'AIzaSyAmy5LE_f12PrxRfzBrWMR-0ik2tU6USW4';

  $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$departCity.'&destinations='.$arriveCity.'&key='.$apiKey;
  echo file_get_contents($url);
}
?>
