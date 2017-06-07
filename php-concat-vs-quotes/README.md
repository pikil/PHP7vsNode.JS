# Concat vs Quotes in PHP
## just checking if concat is really faster

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## concat.php
* 17.76ms
* 16.67ms
* 17.04ms
* 16.62ms
* 16.97ms
#### (Min: 16.67ms, Max: 17.76ms, Avg: 17.01ms)

## quotes.php
* 18.22ms
* 17.26ms
* 17.69ms
* 17.59ms
* 17.76ms
#### (Min: 17.26ms, Max: 18.22ms, Avg: 17.7ms)

Looks like those two methods work pretty similar and the different is very slight - concat runs about 4-5 percent faster...
