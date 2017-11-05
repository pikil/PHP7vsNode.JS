# Arrays vs Objects in PHP
## just checking if re-writing is really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz


# Small files
## check.php
* 13.78ms
* 14.09ms
* 16.80ms
* 13.27ms
* 13.28ms
#### (Min: 13.27ms, Max: 16.80ms, Avg: 14.24ms)

## rewrite.php
* 6.57ms
* 6.31ms
* 6.11ms
* 6.14ms
* 8.08ms
#### (Min: 6.11ms, Max: 8.08ms, Avg: 6.64ms)

Well, simple re-writing is more than 2x times faster there
