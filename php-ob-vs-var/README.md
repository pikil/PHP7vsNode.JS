# s grouping faster in PHP?
## just checking if concatenation is really faster

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## ob.php
* 24.95ms
* 23.60ms
* 23.65ms
* 23.88ms
* 21.22ms
#### (Min: 21.22ms, Max: 24.95ms, Avg: 23.46ms)

## var.php
* 27.96ms
* 22.93ms
* 23.70ms
* 23.15ms
* 25.19ms
#### (Min: 22.93ms, Max: 27.96ms, Avg: 24.59ms)

Surprisingly, the results are pretty similar, and 'ob' shows even better (few percent) performance 
