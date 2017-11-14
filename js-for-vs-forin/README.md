# FOR vs FOR IN
## just checking if for is really faster

Getting two different runs in JS for different types of data initialisation

#### Machine specification
* NodeJS v6.9.1
* 4GB RAM,
* Intel i3, 1.7 GHz

## for.js
* 5.20ms
* 5.02ms
* 5.12ms
* 5.09ms
* 5.11ms
#### (Min: 5.02ms, Max: 5.20ms, Avg: 5.11ms)

## forin.js
* 216.77ms
* 212.89ms
* 211.25ms
* 247.87ms
* 211.20ms
#### (Min: 211.20ms, Max: 247.87ms, Avg: 220.00ms)

Surprisingly, for in JS way faster in comparison to forin. Just in case, the same comparison is checked on PHP and the situation is similar to the one from php-for-vs-foreach-vs-while
