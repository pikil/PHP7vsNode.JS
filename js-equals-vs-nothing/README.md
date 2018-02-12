# FOR vs FOR IN
## just checking if (=== true) is faster than nothing

Getting two different runs in JS for different types of data initialisation

#### Machine specification
* NodeJS v6.9.1
* 4GB RAM,
* Intel i3, 1.7 GHz

## equals.js
* 5.483ms
* 5.564ms
* 5.52ms
* 6.49ms
* 5.885ms
#### (Min: ms, Max: ms, Avg: ms)

## nothing.js
* 4.424ms
* 4.563ms
* 4.629ms
* 4.572ms
* 4.570ms
#### (Min: ms, Max: ms, Avg: ms)

Surprisingly, if there is no value to check, the statement works about 20% faster...
