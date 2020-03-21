<?php
function groupNumber($string)
{
    $replacement = preg_replace('/[^\d]/', '', $string);
    $from = $replacement;
    $results = sprintf("%s-%s-%s-%s-%s-%s",
        substr($from, 0, 3),
        substr($from, 3, 3),
        substr($from, 6, 3),
        substr($from, 9, 3),
        substr($from, 12, 2),
        substr($from, 14, 2));
    return $results;
}

echo groupNumber("993141 -1 1323 14-232");