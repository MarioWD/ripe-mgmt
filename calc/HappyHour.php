<?php
$url = 'https://www.showpass.com/api/public/events/';
$curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
$data = $result;
$events = json_decode($data);
dbg($events);
?>
