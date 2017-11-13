# Arrays vs Objects in PHP
## just checking if grouping beforehand really helps

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* NodeJS v6.9.1
* 4GB RAM,
* Intel i3, 1.7 GHz

## ungrouped.js
* 513.44ms
* 517.16ms
* 520.32ms
* 527.58ms
* 515.72ms
#### (Min: 513.44ms, Max: 527.58ms, Avg: 518.84ms)

## grouped.js
* 96.00ms
* 93.73ms
* 94.53ms
* 93.55ms
* 94.94ms
#### (Min: 93.55ms, Max: 96.00ms, Avg: 94.55ms)

No surprise, the direct access is faster (about 5 times in this particular case) after grouping, if we need to access that array on a regular basis
