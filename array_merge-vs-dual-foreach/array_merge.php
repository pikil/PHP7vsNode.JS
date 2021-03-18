<?php
$source_arr = [];
$arr_count = 10000;

for ($i=0; $i < $arr_count; $i++)
  $source_arr[] = [$i + 1, $i + 2, $i + 3];

$starttime = microtime(true);
$new_arr = [];

foreach ($source_arr as $v)
  $new_arr = array_merge($new_arr, $v);

echo print_r($new_arr, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
