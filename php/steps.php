<?php 
    $filename = 'steps.txt';
    $file = file_get_contents($filename);
    echo json_encode($file);
    //$file = $file - ($_POST['price']);
    $f=fopen($filename,'w');
    fwrite($f,$file);
    fclose($f);
?>