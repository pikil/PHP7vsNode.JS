<?
$starttime = microtime(true);

$array = [];

for ($x=0; $x < 1000; $x++)
  $array[] = [
    "name"=>"Adam",
    "age"=>35
  ];

print_r($array);
echo 'PHP script (run1) took '.((microtime(true) - $starttime) * 1000).'ms';
