# in_array() vs || vs && in PHP
## just checking if MySQLI is really faster

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz
* MySQL
* `addresses` table with 11 columns (mixed values) and 1403 rows

## mysqli.php (SELECT ONLY)
* 12.8ms
* 14.0ms
* 13.6ms
* 13.6ms
* 13.2ms
#### (Min: 12.8ms, Max: 14.0ms, Avg: 13.44ms)

## mysqli.php
* 77.4ms
* 94.8ms
* 94.8ms
* 87.5ms
* 71.5ms
#### (Min: 71.5ms, Max: 94.8ms, Avg: 85.2ms)

## pdo.php (SELECT ONLY)
* 21.2ms
* 20.9ms
* 22.3ms
* 20.3ms
* 19.9ms
#### (Min: 19.9ms, Max: 22.3ms, Avg: 20.92ms)

## pdo.php
* 86.9ms
* 98.5ms
* 81.3ms
* 81.8ms
* 99.1ms
#### (Min: 81.3ms, Max: 99.1ms, Avg: 89.52ms)

If we compare SELECT queries only, MySQLI statements can be up to 1.5 times faster, than PDO ones. However, when we process mixed queries (and that's how it usually happens in the real world), the actual difference drops to about 5%.
