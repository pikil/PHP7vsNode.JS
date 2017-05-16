<?
$starttime = microtime(true);

$array = [];

for ($x=0; $x < 1000; $x++)
  $array[] = [
    "name"=>"Adam",
    "age"=>35
  ];

print_r($array."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
