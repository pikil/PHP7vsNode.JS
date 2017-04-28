# Arrays vs Objects in PHP
## just checking if objects really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine speecification
* v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## run1.php
* 633.5ms
* 471.5ms
* 458.4ms
* 461.0ms
* 437.7ms
#### (Min: 437.7ms, Max: 633.5ms, Avg: 492.42ms)

## run2.php
* 1832.2ms
* 823.4ms
* 814.9ms
* 800.1ms
* 817.2ms
#### (Min: 800.1ms, Max: 1832.2ms, Avg: 1017.56ms)

## run3.php
* 444.6ms
* 467.2ms
* 451.2ms
* 460.4ms
* 446.0ms
#### (Min: 444.6ms, Max: 467.2ms, Avg: 453.88ms)

As we can see there, the instantiation of arrays is still faster, than the objects. However, I need to do more research, as everyone says the opposite...
