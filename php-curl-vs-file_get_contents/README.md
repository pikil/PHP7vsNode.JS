# Arrays vs Objects in PHP
## just checking if curl is really faster

Getting two different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz
* Upload/Download 20/5 (Mbs/s)


# Small files
## curl.php
* 669.65ms
* 649.97ms
* 672.26ms
* 656.78ms
* 651.15ms
#### (Min: 549.97ms, Max: 672.26ms, Avg: 659.96ms)

## file_get_contents.php
* 743.61ms
* 656.23ms
* 655.53ms
* 645.98ms
* 670.93ms
#### (Min: 645.98ms, Max: 743.61ms, Avg: 674.56ms)

The results are pretty close and, as long as CURL shows the almost the same results, it's better to use as it has reacher toolset.
