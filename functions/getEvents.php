<?php
session_start();
$url = "https://www.sportskiobjekti.hr/kalendar-dogadjanja/40";

// Get the HTML content of the webpage
$html = file_get_contents($url);

// Create a new DOMDocument object
$doc = new DOMDocument();

// Load the HTML content into the DOMDocument object
@$doc->loadHTML($html);

// Get the div element with the class tab-content nice-scrollbar and the id months-events
$tabContentDiv = $doc->getElementById("months-events");

// Get the ul elements inside the div
$ul = $tabContentDiv->getElementsByTagName("ul");

$objectsContent = "<div class='w3-grid'>";
$allEvents = [];
foreach ($ul as $u) {
    // Get all the li elements inside the ul
    $liElements = $u->getElementsByTagName("li");
    // Iterate over the li elements
    foreach ($liElements as $li) {
        $eventItem = $li->getElementsByTagName("div")->item(0);
        if ($eventItem) {
            $locationDate = $eventItem->getElementsByTagName("div")->item(0);
            if ($locationDate) {
                $eventDateDiv = $locationDate->getElementsByTagName("div")->item(1);
                if ($eventDateDiv) {
                    $eventDate = $eventDateDiv->nodeValue;
                    $eventDateParts = explode('.', $eventDate);
                    $eventMonth = $eventDateParts[1];
                } else {
                    $eventDate = "";
                    $eventMonth = "";
                }

                $locationTagDiv = $locationDate->getElementsByTagName("div")->item(0);
                if ($locationTagDiv) {
                    $locationTag = $locationTagDiv->nodeValue;
                } else {
                    $locationTag = "";
                }
            } else {
                $eventDate = "";
                $locationTag = "";
            }

            $eventNameDescDiv = $eventItem->getElementsByTagName("div");
            $eventNameDesc = "";
            foreach ($eventNameDescDiv as $div) {
                if ($div->getAttribute("class") == "event-name-desc") {
                    $eventNameDescH3 = $div->getElementsByTagName("h3")->item(0);
                    if ($eventNameDescH3) {
                        $eventNameDesc = trim($eventNameDescH3->nodeValue);
                    }
                    break;
                }
            }
            $allEvents[] = [
                "eventMonth" => $eventMonth,
                "eventDate" => $eventDate,
                "eventNameDesc" => $eventNameDesc,
                "locationTag" => $locationTag
            ];
        }
    }
}
$objectsContent .= "</div>";
$response = [ "status" => 200, "rez" => $allEvents ];
$_SESSION['allEvents'] = $allEvents;
echo json_encode($response);
