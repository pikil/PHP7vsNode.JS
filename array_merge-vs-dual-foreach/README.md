# Array merge vs Loops in PHP
## just checking how really fast dual loop instead of array merge

Checking how faster dual loop is against array_merge and array_merge_spread

#### Machine specification
* PHP v7.3.2
* 16GB RAM,
* Intel i7, 2.6GHz

## array_merge.php
* 401.40ms
* 407.93ms
* 405.41ms
* 399.05ms
* 402.79ms
#### (Min: 399.05ms, Max: 407.93ms, Avg: 403.32ms)

## array_merge_spread.php
* 33.01ms
* 34.72ms
* 29.28ms
* 31.84ms
* 30.01ms
#### (Min: 29.28ms, Max: 34.71ms, Avg: 31.77ms)

## dual_foreach.php
* 29.39ms
* 30.45ms
* 30.72ms
* 30.63ms
* 31.16ms
#### (Min: 29.39ms, Max: 31.16ms, Avg: 30.47ms)

As expected, dual foreach loop is the fastest, with spread on the second (close) place and with array_merge at the very far third place. The speed difference between the first and the third place is around 13x times
