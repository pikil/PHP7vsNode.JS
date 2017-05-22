# define() vs const in PHP
## just checking if 'const' is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## for.php
* 126.9ms
* 128.6ms
* 127.3ms
* 127.9ms
* 126.3ms
#### (Min: 126.3ms, Max: 128.6ms, Avg: 127.4ms)

## foreach.php
* 114.2ms
* 115.2ms
* 113.1ms
* 112.6ms
* 113.4ms
#### (Min: 112.6ms, Max: 115.2ms, Avg: 113.7ms)

## while.php
* 134.8ms
* 127.3ms
* 137.0ms
* 125.8ms
* 136.5ms
#### (Min: 136.5ms, Max: 125.8ms, Avg: 132.2ms)

Looks like 'foreach' loops work surprisingly about 10%-15% faster, than 'for' ones and about 15%-20% faster, than while...
