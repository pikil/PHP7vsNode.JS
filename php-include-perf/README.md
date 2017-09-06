# include performance
## just checking if include ''; is so slow

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## include.php
* 32.27ms
* 31.00ms
* 31.14ms
* 31.35ms
* 31.46ms
#### (Min: 31.0ms, Max: 32.27ms, Avg: 31.44ms)

## one-file.php
* 0.82ms
* 1.11ms
* 0.72ms
* 0.60ms
* 0.92ms
#### (Min: 0.60ms, Max: 1.11ms, Avg: 0.83ms)

include drops performance significantly, however, that is not the matter of worrying, as log as it still takes a quite small amount of time to do that. 100 is fine, but the time will increase with the included files number increase.
