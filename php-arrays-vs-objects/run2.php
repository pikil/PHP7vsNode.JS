<?
$starttime = microtime(true);

$array = [];

for ($x=0; $x < 1000; $x++){
  $o = new ArrayObject;
  $o->name = 'Adam';
  $o->age = 35;
  $array[] = $o;
}

echo print_r($array, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
