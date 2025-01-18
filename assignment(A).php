<?php
// Initialize the sum variable
$sum = 0;
// Loop through numbers 1 to 100
for ($i = 1; $i <= 100; $i++) {
    // Check if the number is even
    if ($i % 2 == 0) {
        // Add the even number to the sum
        $sum += $i;
    }
}

// Display the result
echo "The sum of all even numbers between 1 and 100 is: $sum";
?>