<?php
$pid = shell_exec("ps -eo pid,command | grep 'collatz.py' | grep -v grep | awk '{print $1}'");
$pid = trim($pid);
$time = shell_exec("ps -p $pid -o etime=");
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