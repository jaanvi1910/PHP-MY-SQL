<?php
// Create an associative array of cities and their populations
$cities = [
    "New York" => 8419600,
    "Los Angeles" => 3980400,
    "Chicago" => 2716000
];

// Find the city with the highest population
$highestPopulation = max($cities);
$cityWithHighestPopulation = array_search($highestPopulation, $cities);

// Display the city with the highest population
echo "The city with the highest population is $cityWithHighestPopulation with a population of $highestPopulation.";
?>