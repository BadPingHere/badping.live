<?php
$ip_addr = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d h:i:s");
$headers = array_change_key_case(getallheaders(), CASE_LOWER); 
$response_code = http_response_code()
?>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Everything</title>
</head>
<body> 
    <?php echo "<p>Your ip address is $ip_addr, the time is $time, the headers to this request is $headers, and the response code is $response_code.</p>" ?>
</body>
</html>