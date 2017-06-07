# 0 vs false in PHP
## just checking if false is really faster

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## zero.php
* 82.03ms
* 69.86ms
* 69.58ms
* 68.95ms
* 69.55ms
#### (Min: 68.95ms, Max: 82.03ms, Avg: 71.99ms)

## false.php
* 65.98ms
* 66.84ms
* 65.18ms
* 65.4ms
* 65.11ms
#### (Min: 65.11ms, Max: 66.84ms, Avg: 65.7ms)

Looks like those two methods work pretty similar and the different is very slight - false runs about 7-8 percent faster...
