<?php
// Function to check if a string is a palindrome
function isPalindrome($string) {
    // Remove spaces and convert to lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));
    // Reverse the string
    $reversedString = strrev($cleanedString);
    // Check if the original string is equal to the reversed string
    return $cleanedString === $reversedString;
}

// Example usage
$input = "madam"; // Change this to test other strings
if (isPalindrome($input)) {
    echo "'$input' is a palindrome.";
} else {
    echo "'$input' is not a palindrome.";
}
?>