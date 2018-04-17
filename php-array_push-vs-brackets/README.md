# Arrays vs Objects in PHP
## just checking if there is any difference between these aliases

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz
* Upload/Download 20/5 (Mbs/s)


## array_push.php
* 170.42ms
* 167.97ms
* 150.38ms
* 160.96ms
* 155.45ms
#### (Min: 150.38ms, Max: 170.42ms, Avg: 161.04ms)

## brackets.php
* 110.52ms
* 100.96ms
* 100.91ms
* 105.42ms
* 99.17ms
#### (Min: 99.17ms, Max: 110.52ms, Avg: 103.40ms)

Surprisingly brackets are about 30-40% faster than array_push, even if that is just an alias...
