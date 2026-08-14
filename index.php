<?php

$studentName = "Rahim Ahmed";
$studentID = "23-12345-1";

$foodChoice = 1;
$quantity = 6;

switch ($foodChoice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid Food Item";
        $price = 0;
}

$total = $price * $quantity;

if ($total >= 30) {
    $discount = 20;
} elseif ($total >= 20) {
    $discount = 10;
} else {
    $discount = 0;
}

$discountAmount = ($total * $discount) / 100;

$finalBill = $total - $discountAmount;


echo "================================<br>";
echo "       UNIVERSITY CAFETERIA<br>";
echo "================================<br>";

echo "Student Name : " . $studentName . "<br>";
echo "Student ID : " . $studentID . "<br>";
echo "Food Item : " . $foodItem . "<br>";
echo "Price : $" . $price . "<br>";
echo "Quantity : " . $quantity . "<br>";

echo "<br>";
echo "Ordered Items:<br>";

for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "<br>";
}

echo "<br>";
echo "Subtotal : $" . $total . "<br>";
echo "Discount : " . $discount . "%<br>";
echo "Discount Amt : $" . $discountAmount . "<br>";
echo "Final Bill : $" . $finalBill . "<br>";

echo "Thank you for visiting!<br>";
echo "================================";

?>