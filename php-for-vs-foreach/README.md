# define() vs const in PHP
## just checking if const really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## define.php
* 8.25ms
* 3.89ms
* 4.01ms
* 4.33ms
* 3.50ms
#### (Min: 3.50ms, Max: 8.25ms, Avg: 4.79ms)

## const.php
* 2.83ms
* 2.81ms
* 2.86ms
* 3.05ms
* 2.85ms
#### (Min: 2.86ms, Max: 2.81ms, Avg: 2.88ms)

Apart of the big non-cached first time result for define, the const values take about 50% less time to perform, than define() values...
