# Arrays vs Objects in PHP
## just checking if double quotes are slower

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz


# Small files
## single.php
* 214.55ms
* 218.03ms
* 217.88ms
* 218.41ms
* 219.65ms
#### (Min: 214.55ms, Max: 219.65ms, Avg: 217.70ms)

## double.php
* 237.72ms
* 224.09ms
* 214.68ms
* 216.66ms
* 232.37ms
#### (Min: 214.68ms, Max: 237.72ms, Avg: 225.10ms)

## single-concat.php
* 301.91ms
* 302.32ms
* 301.19ms
* 302.10ms
* 302.34ms
#### (Min: 302.34ms, Max: 301.19ms, Avg: 301.97ms)

# Big files
## single-big.php
* 1247.01ms
* 1260.80ms
* 1235.31ms
* 1235.85ms
* 1494.72ms
#### (Min: 1235.31ms, Max: 1494.72ms, Avg: 1294.14ms)

## double-big.php
* 1244.78ms
* 1241.37ms
* 1232.11ms
* 1245.93ms
* 1277.40ms
#### (Min: 1277.40ms, Max: 1232.11ms, Avg: 1248.318ms)

## single-big-concat.php
* 1642.25ms
* 1524.48ms
* 1540.58ms
* 1572.03ms
* 1536.75ms
#### (Min: 1524.48ms, Max: 1642.25ms, Avg: 1563.22ms)

## double-big-concat.php
* 1545.89ms
* 1559.66ms
* 1544.88ms
* 1546.48ms
* 1543.32ms
#### (Min: 1559.66ms, Max: 1543.32ms, Avg: 1548.01ms)

No surprise, when single quotes are being used, the string comes unevaluated and shows the fastest processing result. Double quotes are slower there. However, when it comes to concatenation, the double quotes perform that task slightly faster (or at about the same level), if the variable is placed within text. So, the single quotes concatenation is slower there.
