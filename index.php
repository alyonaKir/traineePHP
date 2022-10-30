<?php
function camelString(string $input): string
{
    $resToStr = $input;
    $exp = array('_', '-', ' ');
    for ($sep = 0; $sep < count($exp); $sep++) {
        $resToArr = explode($exp[$sep], $resToStr);
        $resToStr = "";
        for ($i = 0; $i < count($resToArr); $i++) {
            $resToStr .= strtoupper(mb_substr($resToArr[$i], 0, 1))
                . mb_substr($resToArr[$i], 1, strlen($resToArr[$i]) - 1);
        }
    }
    return $resToStr;
}

?>

