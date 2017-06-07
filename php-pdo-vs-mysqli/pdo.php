<?
include 'db_const.inc';

$starttime = microtime(true);

$conn = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PWD);
$query1 = $conn->prepare('SELECT * FROM addresses');
$query1->execute();
$query1 = $query1->fetchAll(PDO::FETCH_ASSOC);

$res = 0;
$values = '';

foreach ($query1 as $r)
  $values .= ($r['addr_id']+10000).',\''.addslashes($r['addr_line1']).'\'),(';

$query2 = $conn->prepare('INSERT INTO addresses (addr_id, addr_line1) VALUES ('.rtrim($values, '),(').')');
$query2->execute();

$query3 = $conn->prepare('DELETE FROM addresses WHERE addr_id > 1500');
$query3->execute();

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
