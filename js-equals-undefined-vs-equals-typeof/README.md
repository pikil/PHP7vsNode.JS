# EQUALS TO UNDEFINED VS EQUALS TO TYPEOF UNDEFINED
## just checking if for is really faster

Checking performance of comparing to 'undefined' rather than comparing to typeof undefined

#### Machine specification
* NodeJS v18.4.0
* 16GB RAM,
* Intel Core i7, 2.6 GHz (6-core)

## undefined.js
* 209.80ms
* 217.36ms
* 207.50ms
* 204.69ms
* 211.47ms
#### (Min: 204.69ms, Max: 217.36ms, Avg: 210.164ms)

## typeof-undefined.js
* 207.51ms
* 209.89ms
* 208.91ms
* 205.80ms
* 208.82ms
#### (Min: 205.80ms, Max: 209.89ms, Avg: 208.19ms)

As expected, the difference is really minor or non existed, however === typeof undefined seems to be showing slightly better results.
However, comparing to undefined right away (undefined1.js) gives the fastest result (~10% faster, than others).
