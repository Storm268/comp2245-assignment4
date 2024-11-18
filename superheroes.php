<?php
// Define the superheroes array (do not modify it)
$superheroes = [
    ["alias" => "Captain America", "name" => "Steve Rogers", "bio" => "A super-soldier who fights for justice."],
    ["alias" => "Ironman", "name" => "Tony Stark", "bio" => "A genius billionaire with a high-tech suit of armor."],
    ["alias" => "Spiderman", "name" => "Peter Parker", "bio" => "A teenager with spider-like abilities."],
    ["alias" => "Captain Marvel", "name" => "Carol Danvers", "bio" => "A cosmic-powered superhero."],
    ["alias" => "Black Widow", "name" => "Natasha Romanoff", "bio" => "A master spy and martial artist."],
    ["alias" => "Hulk", "name" => "Bruce Banner", "bio" => "A scientist who transforms into a green monster when angry."],
    ["alias" => "Hawkeye", "name" => "Clint Barton", "bio" => "A skilled marksman with a bow and arrow."],
    ["alias" => "Black Panther", "name" => "T'Challa", "bio" => "The king of Wakanda with enhanced abilities."],
    ["alias" => "Thor", "name" => "Thor Odinson", "bio" => "The God of Thunder from Asgard."],
    ["alias" => "Scarlett Witch", "name" => "Wanda Maximoff", "bio" => "A powerful sorceress with reality-altering abilities."]
];

// Get the 'query' parameter from the URL
$query = isset($_GET['query']) ? htmlspecialchars(trim($_GET['query'])) : '';

// If the query is blank, return the full list of superheroes
if (empty($query)) {
    echo "<ul>";
    foreach ($superheroes as $superhero) {
        echo "<li>{$superhero['alias']}</li>";
    }
    echo "</ul>";
    exit;
}

// Search for a superhero by alias or name
$found = false; // Flag to track if a superhero was found
foreach ($superheroes as $superhero) {
    if (strcasecmp($superhero['alias'], $query) === 0 || strcasecmp($superhero['name'], $query) === 0) {
        // Display the superhero details
        echo "<h3>{$superhero['alias']}</h3>";
        echo "<h4>{$superhero['name']}</h4>";
        echo "<p>{$superhero['bio']}</p>";
        $found = true;
        break;
    }
}

// If no superhero was found, display an error message
if (!$found) {
    echo "<p>Superhero not found</p>";
}
?>
