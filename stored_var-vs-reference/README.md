# include performance
## just checking if stored var for arrays is slower than references for those arrays

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## stored_var.php
* 275.74ms
* 274.61ms
* 307.04ms
* 274.68ms
* 274.38ms
#### (Min: 274.38ms, Max: 307.04ms, Avg: 281.29ms)

## reference.php
* 309.38ms
* 284.28ms
* 285.18ms
* 289.35ms
* 310.31ms
#### (Min: 284.28ms, Max: 310.31ms, Avg: 295.7ms)

Looks like the performance doesn't change much and they can be used on either/or basis. The store_val method is a bit faster for lightweight array values. However, when I start to use big text values for the array, the stored variable method starts to loose and takes more time to process the same script.
