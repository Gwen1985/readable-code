<?php

//  GET PIZZA ORDER
function pizzaOrder($pizzaType, $Customer)
{
    $Customer = ucfirst($Customer);
    $Address = getAddress($Customer);
    $Price = getPrice($pizzaType);

//  PRINT ORDER TEXT ON PAGE
    echo 'Creating new order...<br>';
    echo "A {$pizzaType} pizza should be sent to {$Customer}.<br>";
    echo "The address: {$Address}.<br>";
    echo "The bill is €{$Price}.<br>";
    echo "Order finished.<br><br>";
}

//   GET "ADDRESS" FROM CUSTOMER BY SWITCH CASE CHOICE OF NAME
function getAddress($Customer)
{
    switch ($Customer) {
        case 'Koen':
            return 'Somewhere in Antwerpen';
        case 'Manuele':
            return 'somewhere in Belgium';
        case 'Students':
            return 'BeCode office';
        default:
            return 'N/A';
    }
}

//   GET PRICE BY SWITCH CASE CHOICE OF PIZZA
function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return '5';
        case 'golden':
            return '100';
        case 'calzone':
            return '10';
        case 'hawaii':
            throw new Exception('No way!!');
        default:
            return 'Comming Soon!!';
    }
}

//  CREATE main FUNCTION AS PIZZA ORDER
function main() {
    pizzaOrder('calzone', 'koen');
    pizzaOrder('marguerita', 'manuele');
    pizzaOrder('golden', 'students');
};

//  CALL THE MAIN FUNCTION FOR REFRESH PAGE
main();