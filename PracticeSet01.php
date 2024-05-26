<?php
/**
 * Authors: Cabangbang, Bjan Cymar
 *
 * A collection of utility functions to perform various tasks such as
 * calculating the total price of items in a shopping cart,
 * performing string manipulations, and checking if a number is even or odd.
 */

/**
 * Calculate the total price of items in a shopping cart.
 *
 * Iterates through the products array and calculates the total price by summing
 * up the prices of all the products.
 *
 * @param array $items An array of products with a 'price' key.
 * @return float The total price of all products.
 */
function calculateTotalPrice(array $items): float
{
    $totalPrice = 0.0;
    foreach ($items as $item) {
        $totalPrice += $item['price'];
    }
    return $totalPrice;
}

/**
 * Perform a series of string manipulations.
 *
 * Removes spaces and converts the given string to lowercase.
 *
 * @param string $string The string to manipulate.
 * @return string The modified string.
 */
function manipulateString(string $string): string
{
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

/**
 * Check if a number is even or odd.
 *
 * Determines if the given number is even or odd and returns a corresponding message.
 *
 * @param int $number The number to check.
 * @return string The result indicating if the given number is even or odd.
 */
function isNumberEvenOrOdd(int $number): string
{
    return ($number % 2 == 0) ? "The number $number is even." : "The number $number is odd.";
}

// Example usage for calculateTotalPrice:
$products = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];
$total = calculateTotalPrice($products);
echo "Total Price: $total\n";

// Example usage for manipulateString:
$string = "This is a poorly written program with little structure and readability.";
$modifiedString = manipulateString($string);
echo "Original string: $string\n";
echo "Modified string: $modifiedString\n";

// Example usage for isNumberEvenOrOdd:
$number = 42;
$evenOddResult = isNumberEvenOrOdd($number);
echo "$evenOddResult\n";
?>
