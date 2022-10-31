<?php
function deleteNth(array $a, int $position): array
{
    $buff = $a;
    for ($i = $position; $i < count($buff) - 1; $i++) {
        $buff[$i] = $buff[$i + 1];
    }
    unset($buff[count($buff) - 1]);
    return $buff;
}

?>


