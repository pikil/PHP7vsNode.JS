# Arrays vs Objects in PHP
## just checking if array_map is really faster

Getting five different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## array_map.php
* 66.25ms
* 69.41ms
* 67.66ms
* 66.42ms
* 66.67ms
#### (Min: 66.25ms, Max: 69.41ms, Avg: 67.28ms)

## foreach.php
* 42.67ms
* 45.18ms
* 41.89ms
* 42.32ms
* 46.23ms
#### (Min: 41.89ms, Max: 46.23ms, Avg: 43.66ms)

Looks like array_map is slower for some reason (additional checks and variables inside? 'use' impact?), which needs to be investigated further
