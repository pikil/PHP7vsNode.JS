<?
$arr_template = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

// Setting the array to work with
$array = [];
for ($i=0; $i < 500; $i++)
  foreach ($arr_template as $t)
    $array[] = $t;

$starttime = microtime(true);

$res = 0;

for ($j=0; $j < 100; $j++)
  foreach ($array as $k => $a)
    $res += ($a == 'a') ? 1 : 0 ;

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
