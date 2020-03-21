<?php
function triangle($value)
{
    if (is_int($value)) { 
        for($row = 1; $row <= $value; $row++)
        {
            for($col = 1; $col <= $row; $col++)
            {
                echo "# ";
            }
            echo "<br />";
        }
    } else {
        return "Paramemeter harus angka dan positif!";
    }
}

echo triangle(1) . '<br />';
echo triangle(5) . '<br />';
echo triangle("tiga");