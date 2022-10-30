<?php
function birthCount($birthDate)
{
    $bDate = DateTime::createFromFormat('d-m-Y', $birthDate);
    $curDate = new DateTime();
    $byear = $curDate->format('o');
    $bmonth = $bDate->format('m');
    $bday = $bDate->format('d');
    $bDate = DateTime::createFromFormat('d-m-Y', $bday . "-" . $bmonth . "-" . $byear);
    $dayDiff = $bDate->diff($curDate)->format('%a');
    if ($bmonth <= ($curDate->format("m"))) {
        return (($bDate->format('L') == 0) ? 365 : 366) - $dayDiff;
    }
    return $dayDiff;
}

?>

