<?
$source_arr = [];

for ($i=0; $i < 10000; $i++)
  $source_arr[] = ($i % 2 === 0) ? null : ['one' => 'one', 'two' => 'two'] ;

$starttime = microtime(true);

$var = '';
foreach ($source_arr as $a)
  $var = (!empty($a)) ? 'set' : 'non-set' ;

$endtime = (microtime(true) - $starttime) * 1000;
echo print_r($var, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$endtime.'ms';
