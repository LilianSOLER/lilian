
    <?php 
    $filename = 'test.txt';

    $somecontent = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ?  $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

    if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'a')) { 
        
        exit;
    }
    $somecontent .= " le ". date('d/m/Y') . " à ".date('H:i:s');
    echo "<br>$somecontent";
    if (fwrite($handle, $somecontent."\r\n") === FALSE) { 
        
        exit;
    } 
    
    fclose($handle);
    } else { 
    
    }
    ?>
   