# Arrays vs Objects in PHP
## just checking if implode is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## rtrim.php
* 1973.26ms
* 2050.16ms
* 2013.39ms
* 2048.81ms
* 2092.46ms
#### (Min: 1973.26ms, Max: 2092.46ms, Avg: 2035.62ms)

## implode.php
* 842.47ms
* 837.1ms
* 837.01ms
* 834.14ms
* 852.91ms
#### (Min: 834.14ms, Max: 852.91ms, Avg: 840.73ms)

No surprise, the implode mechanism in this particular manner works about 2.5 times faster 
