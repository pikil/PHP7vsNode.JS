# Is grouping faster in JS?
## just checking if grouping beforehand really helps

Getting two different runs in JS for different types of data initialisation

#### Machine specification
* NodeJS v6.9.1
* 4GB RAM,
* Intel i3, 1.7 GHz

## ungrouped.js for 200 requests
* 2022.54ms
* 1999.47ms
* 1979.03ms
* 1998.36ms
* 2045.31ms
#### (Min: 1979.03ms, Max: 2045.31ms, Avg: 2008.94ms)

## grouped.js for 200 requests
* 114.82ms
* 108.60ms
* 94.00ms
* 92.58ms
* 97.57ms
#### (Min: 92.58ms, Max: 114.82ms, Avg: 101.51ms)

## ungrouped.js for 20 requests
* 213.25ms
* 203.33ms
* 204.73ms
* 206.29ms
* 205.04ms
#### (Min: 203.33ms, Max: 213.25ms, Avg: 206.53ms)

## grouped.js for 20 requests
* 110.45ms
* 113.12ms
* 94.69ms
* 96.85ms
* 92.88ms
#### (Min: 92.88ms, Max: 113.12ms, Avg: 101.56ms)

No surprise, the direct access is faster after grouping (the rate depends on the number of requests), if we need to access that array on a regular basis
