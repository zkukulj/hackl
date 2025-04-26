<?php

require 'db.php';
$db  = new DbHandle();
$getTeams  = "SELECT * FROM categories";
$response = $db->read($getTeams, []);
echo json_encode($response);