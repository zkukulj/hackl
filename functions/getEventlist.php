<?php

require 'db.php';
$db  = new DbHandle();
// $getTeams  = "SELECT * FROM event_list";
$getTeams  = "SELECT id, cat_name, sport, match_time, REPLACE(match_date, ' ', '') AS match_date, location, home_team, away_team, home_team_score, away_team_score FROM event_list";
$response = $db->read($getTeams, []);
echo json_encode($response);
