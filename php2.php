<?php
// Array of Student Names
$students = array("Rahul", "Anjali", "Vikram", "Priya", "Amit", "Zoya", "Kunal");

echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Sorting in Ascending Order
asort($students);
echo "<h3>Array in Ascending Order (asort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Sorting in Descending Order
arsort($students);
echo "<h3>Array in Descending Order (arsort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>
