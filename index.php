<?php
$time = shell_exec('ps -p {PID} -o etime=');
preg_match("/(?>([0-9])+-)?([0-9]{2})?\:([0-9]{2})\:([0-9]{2})$/", $time, $matches);
$days = $matches[1];
$hours = $matches[2];
$minutes = $matches[3];
$seconds = $matches[4];

$time_string = "";
$time_string .= strlen($days) > 0 ? $days . " days, " : "";
$time_string .= strlen($hours) > 0 ? $hours . " hours " : "";
$time_string .= strlen($minutes) > 0 ? $minutes . " minutes and " : "";
$time_string .= $seconds . " seconds";

echo "Collatz.py running since: " . $time_string;
echo '<pre>'.file_get_contents('path/to/logs.txt').'</pre>';