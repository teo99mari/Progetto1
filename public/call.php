<?php

$starDate = 1616540401;
$numSplit = 24;
$slitValue = 86400 / $numSplit;

$endpoint = "https://api.isp4u.it/api/rest_api/integration/course_fruition?";

$resultData = [];
$countTot = 0;
for ($i = 0; $i < $numSplit; $i++) {
    $endDate = ($starDate - 1) + $slitValue;
    $count = null;

    $result = call($endpoint . "starting_timestamp=$starDate&ending_timestamp=$endDate");
    if (empty($result['data']) || !is_array($result['data'])) {
        sleep(30);
        $result = call($endpoint . $endDate);
    }

    if (is_array($result['data'])) {
        $count = count($result['data']);
        $countTot += $count;
    }

    $startDateFormatted = ((new \DateTime())->setTimestamp($starDate+3600))->format('Y-m-d H:i:s');
    $endDateFormatted = ((new \DateTime())->setTimestamp($endDate+3600))->format('Y-m-d H:i:s');
    $resultData["$startDateFormatted -- $endDateFormatted"] = $count;
    $starDate = $endDate + 1;
}
$resultData['Tot'] = $countTot;
echo(json_encode($resultData));

function call($endpoint) {
    $headers = [
        'Authorization: Bearer'
    ];

    $curlSES = curl_init();
    curl_setopt($curlSES,CURLOPT_URL, $endpoint);
    curl_setopt($curlSES, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curlSES,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curlSES, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curlSES,CURLOPT_HEADER, false);
    curl_setopt($curlSES, CURLOPT_CONNECTTIMEOUT,60);
    curl_setopt($curlSES, CURLOPT_TIMEOUT,60);
    curl_setopt($curlSES, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlSES, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($curlSES);
    $result = json_decode($response, true);

    curl_close($curlSES);

    return $result;
}
