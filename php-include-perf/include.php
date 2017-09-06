<?
$starttime = microtime(true);

function func($param)
{
  include_once 'file.inc';
  return $param;
}

$param = 'foo';

for ($x=0; $x < 1000; $x++)
  $param = func($param);

print_r("Done. | '.$param.' |\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
