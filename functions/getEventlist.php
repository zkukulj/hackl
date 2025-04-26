<?php

require 'db.php';
$db  = new DbHandle();
$getTeams  = "SELECT * FROM event_list";
$response = $db->read($getTeams, []);
echo json_encode($response);