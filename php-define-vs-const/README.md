# define() vs const in PHP
## just checking if for really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* v7.1.0
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

Looks like 'foreach' loops work surprisingly about 10%-15% faster, than 'for' ones...
