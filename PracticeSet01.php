<?php
/**
 * Calculate the total price.
 * 
 * @param array $items An array of items with 'name' and 'price' keys.
 * @return float The total price of all items in the cart.
 */
function calculateTotalPrice(array $items): float
{
    return array_reduce($items, function ($total, $item) {
        return $total + $item['price'];
    }, 0);
}

/**
 * Perform a series of string manipulations.
 * 
 * @param string $string The input string to manipulate.
 * @return string The modified string.
 */
function manipulateString(string $string): string
{
    return strtolower(str_replace(' ', '', $string));
}

/**
 * Check if a number is even or odd.
 * 
 * @param int $number The number to check.
 * @return string A string indicating if the number is even or odd.
 */
function isEvenOrOdd(int $number): string
{
    return ($number % 2 === 0) ? "The number {$number} is even." : "The number {$number} is odd.";
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$total = calculateTotalPrice($items);
echo "Total price: {$total}\n";
echo "<br>";

$string = "This is a poorly written program with little structure and readability.";
$modifiedString = manipulateString($string);
echo "Modified string: {$modifiedString}\n";
echo "<br>";

$number = 11;
$evenOrOdd = isEvenOrOdd($number);
echo "{$evenOrOdd}\n";
?>
