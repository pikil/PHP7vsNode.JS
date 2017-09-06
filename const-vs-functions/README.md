# include performance
## just checking if function is slower than constants

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## const.php
* 97.72ms
* 97.78ms
* 98.66ms
* 100.27ms
* 98.92.ms
#### (Min: 97.72ms, Max: 100.27ms, Avg: 98.67ms)

## function.php
* 939.74ms
* 984.4ms
* 954.9ms
* 953.13ms
* 954.24ms
#### (Min: 939.74ms, Max: 984.4ms, Avg: 957.282ms)

Well, as expected - about ten times slower than the stored one
