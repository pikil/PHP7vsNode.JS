# Arrays vs Objects in PHP
## just checking if CONCATENATE is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## concat.php
* 234.72ms
* 242.31ms
* 234.28ms
* 235.23ms
* 236.06ms
#### (Min: 234.72ms, Max: 242.31ms, Avg: 236.52ms)

## implode1.php
* 238.90ms
* 238.82ms
* 237.43ms
* 247.58ms
* 232.50ms
#### (Min: 232.50ms, Max: 247.58ms, Avg: 239.05ms)

## implode2.php
* 453.28ms
* 459.12ms
* 462.43ms
* 447.90ms
* 457.19ms
#### (Min: 447.90ms, Max: 462.43ms, Avg: 455.98ms)

Surprisingly, concat is about 1.8-2 times faster, than the implode methods, if we create the array of existing variables, and works almost with the same speed, if we assign the array variable straight away...
