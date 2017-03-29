# PHP7vsNode.JS
## Yet another speed benchmark for Node.js and PHP7 server-side environments

The comparison idea came after reading the article about benchmarks for GO, Node.js and PHP, which can be found here: [article](https://jaxbot.me/articles/benchmarks_nodejs_vs_go_vs_php_3_14_2013).

However, I could not understand, why the execution times are so different between PHP and others.

So, I decided to perform the benchmark for modified scripts in order to see the real difference in the performance, which has been done in this project.

I've taken the scripts provided in the post above, as a basis (run1) and tested them with the modifications (run2), which provide exactly the same result.

## The server specification was:

#### For Node.JS
* v6.9.1,
* 4GB RAM,
* Intel i3, 1.7 GHz

#### For PHP
* v7.0.8
* 4GB RAM,
* Intel i3, 1.7 GHz

According to the run tests (5 times for each script), the final time results are:

## Node.js - Run 1
* 159ms
* 159ms
* 167ms
* 239ms
* 161ms
#### (Min: 159ms, Max: 239ms, Avg: 177ms)

## PHP - Run 1
* 2539ms
* 2617ms
* 3050ms
* 3235ms
* 3127ms
#### (Min: 2539ms, Max: 3235ms, Avg: 2913.6ms)

So, that numbers cohere with the numbers provided in the post. Let's see what happens next:

## Node.js - Run 2
* 103ms
* 117ms
* 110ms
* 106ms
* 108ms
#### (Min: 103ms, Max: 117ms, Avg: 114.8ms)

The results look much nicer, than the first run, and we can see the reducing of the execution time by approximately 54%, which sounds very good. Let's try the last script and see, what happens there.

## PHP - Run 2
* 22ms
* 17ms
* 19ms
* 18ms
* 23ms
#### (Min: 17ms, Max: 23ms, Avg: 19.8ms)

That's kinda frustrating, because I was expecting the speed reducing by the same amount of percent, as Node.js has, but we can see that the performance increased by approximately 14700% and the script became almost 150 times faster.
