<?
include 'db_const.inc';

$starttime = microtime(true);

$conn = mysqli_connect(HOST, USER, PWD, DB);
$raw1 = mysqli_query($conn, 'SELECT * FROM addresses');

$res = 0;
$values = '';

foreach ($raw1 as $r)
  $values .= ($r['addr_id']+10000).',\''.addslashes($r['addr_line1']).'\'),(';

$raw2 = mysqli_query($conn, 'INSERT INTO addresses (addr_id, addr_line1) VALUES ('.rtrim($values, '),(').')');
$raw3 = mysqli_query($conn, 'DELETE FROM addresses WHERE addr_id > 1500');

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
