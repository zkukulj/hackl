<?php
$url = "https://www.sportskiobjekti.hr/objekti/14";

// Get the HTML content of the webpage
$html = file_get_contents($url);

// Create a new DOMDocument object
$doc = new DOMDocument();

// Load the HTML content into the DOMDocument object
@$doc->loadHTML($html);

// Get the ul element with the class no-list-style property-list-page
$ul = $doc->getElementsByTagName("ul");

$objectsContent = "<div class='objektiGrid'>";
foreach ($ul as $u) {
    if ($u->getAttribute("class") == "no-list-style property-list-page") {
        // Get all the li elements inside the ul
        $liElements = $u->getElementsByTagName("li");
        // Iterate over the li elements
        foreach ($liElements as $li) {
            // Create a new div element
            $div = $li->ownerDocument->createElement("div");
            // Replace the li element with the div element
            $li->parentNode->replaceChild($div, $li);
            // Move the contents of the li element to the div element
            while ($li->hasChildNodes()) {
                $div->appendChild($li->firstChild);
            }
            // Change the href value of the a element
            $a = $div->getElementsByTagName("a")->item(0);
            $a->setAttribute("href", "https://www.sportskiobjekti.hr" . $a->getAttribute("href"));
            $img = $a->getElementsByTagName("img")->item(0);
            $img->setAttribute("src", "https://www.sportskiobjekti.hr" . $img->getAttribute("src"));
            
            $a = $div->getElementsByTagName("a")->item(0);
            $newDiv = $div->ownerDocument->createElement("div");
            $newDiv->setAttribute("class", $a->getAttribute("class"));
            while ($a->hasChildNodes()) {
                $newDiv->appendChild($a->firstChild);
            }
            $a->parentNode->replaceChild($newDiv, $a);
            $objectsContent .= $div->ownerDocument->saveHTML($div);
        }
    }
}
$objectsContent .= "</div>";
$response = [ "status" => 200, "rez" => $objectsContent ];
echo json_encode($response);