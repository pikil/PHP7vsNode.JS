<?
$html = '';

$starttime = microtime(true);

for ($x=0; $x < 1; $x++)
  $html = file_get_contents('https://www.google.co.nz');

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($html, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
