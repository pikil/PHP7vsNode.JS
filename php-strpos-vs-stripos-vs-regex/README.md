# Arrays vs Objects in PHP
## just checking if regex is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## strpos.php
* 492.62ms
* 451.58ms
* 457.47ms
* 452.79ms
* 454.35ms
#### (Min: 451.58ms, Max: 492.62ms, Avg: 461.76ms)

## stripos.php
* 443.36ms
* 449.22ms
* 442.40ms
* 443.31ms
* 442.88ms
#### (Min: 442.40ms, Max: 449.22ms, Avg: 444.23ms)

## regex.php
* 50.38ms
* 48.82ms
* 49.77ms
* 53.58ms
* 57.20ms
#### (Min: 48.82ms, Max: 57.20ms, Avg: 51.95ms)

Surprisingly, stripos almost doesn't make any difference (speed increase less than 10 percent), however regex shows about 7-8 times faster work...
