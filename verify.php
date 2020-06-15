<?php
    // Authorisation details.
    $username = "yashsohagia90@gmail.com";
    $hash = "e6a65b86c8f56ea4454511aa5d6238957c54f8fc13e91f0f28dbae20d1691814";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "1";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = "918153832282"; // A single number or a comma-seperated list of numbers
    $message = "Pance: Paytm Wallet- Rs 10";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
?>