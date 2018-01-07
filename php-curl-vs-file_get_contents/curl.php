<?
$html = '';

$starttime = microtime(true);

for ($x=0; $x < 1; $x++) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.google.co.nz');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $html = curl_exec($ch);
  curl_close($ch);
}

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($html, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
