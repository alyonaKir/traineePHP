<?php
function checkURL($input): string
{
    if (filter_var($input, FILTER_VALIDATE_URL) !== false
        && preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $input)) {
        return "OK";
    } else {
        return "Not a valid URL";
    }
}
?>
