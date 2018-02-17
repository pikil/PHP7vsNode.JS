# is_null() vs '=== null' in PHP
## just checking if PHP version is showing the same results, as the JS one (js-equals-vs-nothing)

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## equals.php
* 35.70ms
* 35.33ms
* 35.17ms
* 34.82ms
* 35.08ms
#### (Min: 35.17ms, Max: 35.70ms, Avg: 35.22ms)

## nothing.php
* 32.83ms
* 32.38ms
* 32.54ms
* 32.96ms
* 32.56ms
#### (Min: 32.38ms, Max: 32.83ms, Avg: 32.65ms)

In contrast with JS, there is only ~10% difference spotted between those two approaches.
