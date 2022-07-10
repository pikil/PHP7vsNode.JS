# ES6 CLASSES vs PROTOTYPING
## just checking how much prototyping can be faster

#### Machine specification
* NodeJS v18.4.0 / Google Chrome v103.0.5060.114
* 16GB RAM,
* Intel Core i7, 2.6 GHz (6-core)

## es6-classes.js
* 141.93ms
* 139.57ms
* 139.70ms
* 139.44ms
* 141.31ms
#### (Min: 139.44ms, Max: 141.93ms, Avg: 140.39ms)

## prototyping.js
* 164.55ms
* 142.11ms
* 140.30ms
* 142.11ms
* 142.46ms
#### (Min: 140.30ms, Max: 164.55ms, Avg: 146.30ms)

Surpisingly, in NodeJS `classes` are behaving ~1-3% faster (stable difference apart from cold start in prototyping.js).
In browser, though, the results were inconclusive jumping really high and low against each other. Even https://jsbench.me/ showed different results on different runs
