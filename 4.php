<?php
function longest($string)
{
    if (is_string($string))
    {
        $replacement = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);
        $array = explode(" ", $replacement);
        $mapping = array_combine($array, array_map('strlen', $array));
        $keys = array_keys($mapping, max($mapping));
        $results = $keys[0];
        return $results;
    } else {
        return false;
    }
}

echo longest("Halo Arkademian!") . '<br />';
echo longest("Seluruh Arkademian mengucapkan selamat Ramadhan!") . '<br />';
echo longest("Baju ini sangat bagus sekali!");