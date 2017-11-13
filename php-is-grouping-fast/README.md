# s grouping faster in PHP?
## just checking if grouping beforehand really helps

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz


## ungrouped.php for 200 requests
* 2156.66ms
* 2025.20ms
* 2055.52ms
* 1957.77ms
* 2068.63ms
#### (Min: 1957.77ms, Max: 2156.66ms, Avg: 2052.76ms)

## grouped.php for 200 requests
* 20.24ms
* 19.30ms
* 19.73ms
* 19.59ms
* 19.54ms
#### (Min: 19.30ms, Max: 20.24ms, Avg: 19.68ms)

No surprise, the direct access is faster after grouping (the rate depends on the number of requests), if we need to access that array on a regular basis
