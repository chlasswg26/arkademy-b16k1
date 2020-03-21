<?php
function usernameCheck($string)
{
    $regex = '/^[[:lower:]]{5,7}$/';
    preg_match($regex, $string, $match);
    
    if ($match == true) {
        return true;
    } else {
        return false;
    }
}

function passwordCheck($string)
{
    $regex = '/[a-zA-Z0-9@]{9}$/';
    preg_match($regex, $string, $match);
    
    if ($match == true) {
        return true;
    } else {
        return false;
    }
}

echo usernameCheck("diandra") . '<br />';
echo usernameCheck("Ebi") . '<br />';
echo passwordCheck("Kint4m@ni") . '<br />';
echo passwordCheck("p@ssW0rd!") . '<br />';