<?
$starttime = microtime(true);

$array = [];

for ($x=0; $x < 1000; $x++){
  $o = new ArrayObject;
  $o->name = "Adam";
  $o->age = 35;
  $array[] = $o;
}

print_r($array."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
