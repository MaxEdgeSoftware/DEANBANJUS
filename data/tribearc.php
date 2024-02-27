<?php
function sendTribearc($receiver_email, $subject, $message)
{
    $curl = curl_init();
    curl_setopt(
        $curl,
        CURLOPT_URL,
        "https://mail.tribearc.com/api/campaigns/send_now.php"
    );
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); //
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST"); //
    curl_setopt($curl, CURLOPT_POSTFIELDS, [
        "api_key" => "KeLlJxUnSrofziNtVcdZIFQEARYGhy",
        "from_name" => "FUNATECH",
        "from_email" => "info@funatechinvestment.co.uk",
        "reply_to" => "info@funatechinvestment.co.uk",
        "subject" => $subject,
        "html_text" => $message,
        "track_opens" => "1",
        "track_clicks" => "1",
        "send_campaign" => "1",
        "json" => "1",
        "emails" => $receiver_email,
        "business_address" => "EC3N 4EE 1 TOWER HILL TERRACE, LONDON, UK",
        "business_name" => "FUNATECH INVESTMENTS COMPANY",
    ]);

    $response = curl_exec($curl);
    $res = $response;
    // var_dump($response);
    curl_close($curl);
    if ($res == 'Message sent!') {
        return $res;
    } else {
        return 'An error occurred';
    }
}
