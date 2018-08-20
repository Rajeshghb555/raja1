<?php

$json_url = "https://localhost:8080/report/thresholds/1";
$json = file_get_contents($json_url);
//$data=array();
$data[] = json_decode($json,TRUE);

echo "---------------------------------------";
echo "<pre>";
print_r($data);
echo "</pre>";
$i=0;
foreach($data as $da){
echo $da['Heat Treatment']['P2']['if_crossed_threshold']." - ".$da['Heat Treatment']['P2']['latest_value']."<br>";
echo $da['Heat Treatment']['Sen 3']['if_crossed_threshold']." - ".$da['Heat Treatment']['Sen 3']['latest_value']."<br>";
echo $da['Heat Treatment']['T2']['if_crossed_threshold']." - ".$da['Heat Treatment']['T2']['latest_value']."<br>";

echo "<br>".$i."<br>";
$i++;
}
echo "---------------------------------------";

?>