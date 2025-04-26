<?php

require 'db.php';
$db  = new DbHandle();
$getTeams  = "SELECT * FROM locations";
$response = $db->read($getTeams, []);
echo json_encode($response);