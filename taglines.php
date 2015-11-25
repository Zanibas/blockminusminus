<?php
    $f_contents = file ("taglines.txt");
    $line = $f_contents[array_rand ($f_contents)];
    print $line;
?>