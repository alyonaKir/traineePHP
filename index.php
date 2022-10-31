<?php
function birthCount($birthday)
{
    $cd = new \DateTime('today');
    $bd = new \DateTime($birthday);
    $bd->setDate($cd->format('Y'), $bd->format('m'), $bd->format('d'));
    $tmp = $cd->diff($bd);
    if ($tmp->invert) {
        $bd->modify('+1 year');
        $tmp = $cd->diff($bd);
    }
    return $tmp->days;
}

?>


