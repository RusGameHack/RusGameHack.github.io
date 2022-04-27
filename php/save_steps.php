<?php 
    $filename = 'steps.txt';
    $f=fopen($filename,'w');
    fwrite($f,$_POST['step']);
    fclose($f);
?>