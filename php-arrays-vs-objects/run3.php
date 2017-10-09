<?
$starttime = microtime(true);

$array = [];

class MyArrayObject{
  public $name, $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

for ($x=0; $x < 1000; $x++)
  $array[] = new MyArrayObject('Adam', 35);

echo print_r($array, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
