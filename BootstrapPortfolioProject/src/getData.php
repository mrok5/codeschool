<?php
require_once 'Unirest.php';

$response = Unirest\Request::get("https://makevoid-skicams.p.mashape.com/cams.json",
  array(
    "X-Mashape-Key" => "kxSXmUymofmshFHhhKxWOSJpqJsJp1I3zNnjsnqKwhITAiC1zw",
    "Accept" => "application/json"
  )
);

echo json_encode($response);
?>
