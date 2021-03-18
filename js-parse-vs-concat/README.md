# Is string parsing faster than concatenation in JS?
## just checking if grouping beforehand really helps

Getting two different runs in JS for different types of data initialisation

#### Machine specification
* NodeJS v15.9.0
* 16GB RAM,
* Intel i7, 2.6 GHz

## concat_string.js single var
* 14.99ms
* 14.26ms
* 14.38ms
* 14.35ms
* 14.48ms
#### (Min: 14.26ms, Max: 14.99ms, Avg: 14.49ms)

## concat_string.js multiple vars
* 409.86ms
* 398.59ms
* 395.83ms
* 376.28ms
* 403.77ms
#### (Min: 376.28ms, Max: 409.86ms, Avg: 396.87ms)

## parse_string.js single var
* 15.25ms
* 16.61ms
* 15.23ms
* 14.24ms
* 15.01ms
#### (Min: 14.24ms, Max: 16.61ms, Avg: 15.27ms)

## parse_string.js multiple vars
* 388.82ms
* 393.89ms
* 395.77ms
* 394.24ms
* 397.16ms
#### (Min: 388.82ms, Max: 397.16ms, Avg: 393.98ms)

Surprizingly, there is a miniscule difference between these two approaches
