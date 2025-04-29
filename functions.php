<?php
/**
 * Generate an array of random integers between 1 and 10
 * 
 * @param int $size The size of the array to generate
 * @return array An array of random integers
 */
function generateRandomArray($size) {
    $array = [];
    for ($i = 0; $i < $size; $i++) {
        $array[] = mt_rand(1, 10);
    }
    return $array;
}

/**
 * Calculate the mean (average) of an array of numbers
 * 
 * @param array $array The input array
 * @return float The mean value
 */
function calculateMean($array) {
    return array_sum($array) / count($array);
}

/**
 * Calculate the median (middle value) of an array of numbers
 * 
 * @param array $array The input array
 * @return float The median value
 */
function calculateMedian($array) {
    // Create a copy of the array and sort it
    $sortedArray = $array;
    sort($sortedArray);
    $count = count($sortedArray);
    
    // Find the middle element(s)
    $middleIndex = floor(($count - 1) / 2);
    
    if ($count % 2 == 0) {
        // Even number of elements - average the two middle elements
        return ($sortedArray[$middleIndex] + $sortedArray[$middleIndex + 1]) / 2;
    } else {
        // Odd number of elements - return the middle element
        return $sortedArray[$middleIndex];
    }
}

/**
 * Calculate the mode (most frequent value) of an array of numbers
 * Returns a tuple [boolean hasModes, array modes]
 * 
 * @param array $array The input array
 * @return array Array containing [boolean hasModes, array of modes]
 */
function calculateMode($array) {
    // Count frequency of each value
    $valueCounts = array_count_values($array);
    
    // Find the maximum frequency
    $maxFrequency = max($valueCounts);
    
    // If max frequency is 1, all values appear only once (no mode)
    if ($maxFrequency == 1) {
        return [false, []];
    }
    
    // Find all values that have the maximum frequency
    $modes = [];
    foreach ($valueCounts as $value => $count) {
        if ($count == $maxFrequency) {
            $modes[] = $value;
        }
    }
    
    return [true, $modes];
}
?>