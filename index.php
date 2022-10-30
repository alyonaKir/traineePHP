<?php
function compareIfElse($inputNumber)
{
    if ($inputNumber > 30) {
        return "More than 30";
    } elseif ($inputNumber > 20) {
        return "More than 20";
    } elseif ($inputNumber > 10) {
        return "More than 10";
    } else {
        return "Equal or less than 10";
    }
}

function compareSwitch($inputNumber)
{
    switch ($inputNumber) {
        case $inputNumber > 30:
            return "More than 30";
        case $inputNumber > 20:
            return "More than 20";
        case $inputNumber > 10:
            return "More than 10";
        default:
            return "Equal or less than 10";
    }
}

function compareTernary($inputNumber)
{
    return ($inputNumber > 30) ? "More than 30" : (($inputNumber > 20) ? "More than 20" : (($inputNumber > 10) ? "More than 10" : "Equal or less than 10"));
}

?>