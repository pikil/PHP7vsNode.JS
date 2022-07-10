# FOR vs FOREACH vs FOR IN
## just checking if for is really faster

Checking performance of Object.keys(), for .. in. We will be running three cases for comparing the best approach for iterating through object keys.

#### Machine specification
* NodeJS v18.4.0
* 16GB RAM,
* Intel Core i7, 2.6 GHz (6-core)

## forin.js
* 218.45ms
* 214.15ms
* 218.16ms
* 218.85ms
* 218.90ms
#### (Min: 214.15ms, Max: 218.90ms, Avg: 217.70ms)

## objectkeys-for.js
* 192.98ms
* 188.17ms
* 187.10ms
* 188.90ms
* 191.20ms
#### (Min: 187.10ms, Max: 192.98ms, Avg: 189.67ms)

## objectkeys-foreach.js
* 211.74ms
* 213.52ms
* 216.36ms
* 211.28ms
* 209.01ms
#### (Min: 209.01ms, Max: 216.36ms, Avg: 212.38ms)


No surprise here, Forin is ~2.5% slower than Object.keys+foreach, Object.keys+foreach is ~10% slower than Object.keys+for
