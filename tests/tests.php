<?php
$totalCost = 10;
$loyaltyPoints = 6000;

switch ($loyaltyPoints) {
    case $loyaltyPoints < 3000:
        $costWithPercent = ($totalCost * 8) / 100;
        $costWithPercent += $totalCost;
        $totalCostInCents = round($costWithPercent * 100);
        $loyaltyPoints += $totalCostInCents;
        echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be $" . $costWithPercent . ". " . "Your new Loyalty Balance would be: $loyaltyPoints" . '.';
        break;

    case $loyaltyPoints >= 3000 and $loyaltyPoints < 6000:
        $discountPercent = ($totalCost * 5) / 100;
        $costWithDiscount = $totalCost - $discountPercent;
        $tax =  ($costWithDiscount * 8) / 100;
        $costWithDiscount += $tax;
        $totalCostInCents = $costWithDiscount * 100;
        $loyaltyPoints += ($totalCostInCents - 3000);

        echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be $" .  $costWithDiscount . '. ' . "Your new Loyalty Balance would be: $loyaltyPoints" . '.';
        break;

    case $loyaltyPoints >= 6000:

        $discountPercentThreeThousand = ($totalCost * 5) / 100;
        $discountPercentSixThousand = ($totalCost * 15) / 100;


        $costWithDiscountThree = $totalCost - $discountPercentThreeThousand;
        $costWithDiscountSix = $totalCost - $discountPercentSixThousand;

        $taxThree =  ($costWithDiscountThree * 8) / 100;
        $taxSix =  ($costWithDiscountSix * 8) / 100;

        $costWithDiscountThree += $taxThree;
        $costWithDiscountSix += $taxSix;

        $totalCostInCentsThree = $costWithDiscountThree * 100;
        $totalCostInCentsSix = $costWithDiscountSix * 100;

        $loyaltyPointsThree = $loyaltyPoints;
        $loyaltyPointsSix = $loyaltyPoints;


        $loyaltyPointsThree += ($totalCostInCentsThree - 3000);
        $loyaltyPointsSix += ($totalCostInCentsSix - 6000);

        echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be $" .  $costWithDiscountThree . '. ' . "Your new Loyalty Balance would be: $loyaltyPointsThree" . '.';
        echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be $" .  $costWithDiscountSix . '. ' . "Your new Loyalty Balance would be: $loyaltyPointsSix" . '.';

        break;
};
