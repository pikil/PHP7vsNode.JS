# s grouping faster in PHP?
## just checking if grouping beforehand really helps

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz


## ungrouped.php
* 212.57ms
* 212.04ms
* 207.92ms
* 211.81ms
* 212.96ms
#### (Min: 207.92ms, Max: 212.96ms, Avg: 211.46ms)

## grouped.php
* 19.99ms
* 19.40ms
* 19.28ms
* 19.29ms
* 19.51ms
#### (Min: 19.28ms, Max: 19.99ms, Avg: 19.49ms)

No surprise, the direct access is faster (about three times in this particular case) after grouping, if we need to access that array on a regular basis
