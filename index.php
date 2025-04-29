<?php
// Include required files
include 'header.php';
include 'functions.php';

// Initialize variables
$arraySize = '';
$selectedOption = '';
$randomArray = [];
$result = null;
$showResult = false;
$hasModes = true;
$modes = [];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arraySize = $_POST["arraySize"];
    $selectedOption = $_POST["operation"];
    
    // Generate random array
    $randomArray = generateRandomArray($arraySize);
    
    // Perform selected operation
    if ($selectedOption == "mean") {
        $result = calculateMean($randomArray);
    } 
    else if ($selectedOption == "median") {
        $result = calculateMedian($randomArray);
    } 
    else if ($selectedOption == "mode") {
        list($hasModes, $modes) = calculateMode($randomArray);
    }
    
    $showResult = true;
}

// Include the form template
include 'form.php';

// Show results if form was submitted
if ($showResult) {
    include 'results.php';
}

// Include footer
include 'footer.php';
?>