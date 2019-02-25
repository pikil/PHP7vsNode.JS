# Arrays vs Objects in PHP
## just checking if empty() is really faster than isset or count

Getting five different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## isset.php
* 0.65ms
* 0.65ms
* 0.67ms
* 0.65ms
* 0.67ms
#### (Min: ms, Max: ms, Avg: ms)

## isset_subelement.php
* 0.80ms
* 0.80ms
* 0.96ms
* 0.78ms
* 0.77ms
#### (Min: ms, Max: ms, Avg: ms)

## empty.php
* 0.86ms
* 0.88ms
* 0.90ms
* 0.90ms
* 0.88ms
#### (Min: ms, Max: ms, Avg: ms)

## count.php
* 1.20ms
* 1.18ms
* 1.42ms
* 1.20ms
* 1.18ms
#### (Min: ms, Max: ms, Avg: ms)

empty() is quite fast, however isset() is about 20% faster and if checking isset() on sub-element of the variable that is about 10% faster
