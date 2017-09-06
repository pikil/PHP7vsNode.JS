# is_null() vs '=== null' in PHP
## just checking if is_null is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## is_null.php
* 66.1ms
* 64.5ms
* 65.0ms
* 64.2ms
* 64.2ms
#### (Min: 64.2ms, Max: 66.1ms, Avg: 64.8ms)

## eq-null.php
* 67.6ms
* 70.2ms
* 67.3ms
* 67.1ms
* 67.4ms
#### (Min: 67.1ms, Max: 70.2ms, Avg: 67.32ms)

is_null() is 4% faster
