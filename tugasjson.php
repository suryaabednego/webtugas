<?php
//proses get file json
$json_string = file_get_contents("http://api.wunderground.com/api/763029928f99fdb8/hourly/q/CA/San_Francisco.json");
$json_string2 = file_get_contents("http://api.wunderground.com/api/763029928f99fdb8/astronomy/q/Australia/Sydney.json");
$json_string3 = file_get_contents ("http://api.wunderground.com/api/763029928f99fdb8/planner_07010731/q/CA/San_Francisco.json");
$parsed_json = json_decode ($json_string);
$parsed_json2 = json_decode ($json_string2);
$parsed_json3 = json_decode ($json_string3);
//proses json
$a1 = $parsed_json->hourly_forecast[0]->{"FCTTIME"}->{"hour"};
$a2 = $parsed_json->hourly_forecast[0]->{"FCTTIME"}->{"min"};
$a3 = $parsed_json->hourly_forecast[0]->{"FCTTIME"}->{"pretty"};
$b1 = $parsed_json2->{"moon_phase"}->{"sunrise"}->{"hour"};
$b2 = $parsed_json2->{"moon_phase"}->{"sunset"}->{"minute"};
$b3 = $parsed_json2->{"moon_phase"}->{"ageOfMoon"};
$c1 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"pretty"};
$c2 = $parsed_json3->{"trip"}->{"airport_code"};
$c3 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"tz_long"};
//memanggil hasil proses json
echo "tampilan json";
echo "<br>";
echo "Dilihat dari jam : ${a1}\n";
echo "<br>";
echo "pada menit ke : ${a2}\n";
echo "<br>";
echo "berada pada jam : ${a3}\n";
echo "<br>";
echo "<br>";
echo "Element astronomy";
echo "<br>";
echo "lama munculnya matahari jam : ${b1}\n";
echo "<br>";
echo "terbenamnya matahari pada pukul : ${b2}\n";
echo "<br>";
echo "Umur bulan : ${b3}\n";
echo "<br>";
echo "<br>";
echo "Element planner";
echo "<br>";
echo "tanggal canti kuntuk bulan mei : ${c1}\n";
echo "<br>";
echo "Code Pesawat terbang dibulan ini : ${c2}\n";
echo "<br>";
echo "nama kota di USA : ${c3}\n";
?>