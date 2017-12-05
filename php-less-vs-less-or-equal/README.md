# Arrays vs Objects in PHP
## just checking if $i < (int) is really faster than $i <= (int)

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz


# Small files
## less.php
* 977.61ms
* 980.26ms
* 989.73ms
* 979.70ms
* 990.02ms
#### (Min: 977.61ms, Max: 990.02ms, Avg: 983.46ms)

## less-or-equal.php
* 981.222ms
* 976.02ms
* 1087.90ms
* 1002.11ms
* 1026.24ms
#### (Min: ms, Max: ms, Avg: ms)

If there is no difference of how to iterate through the numbers, the 'less' approach is slightly (1-5%) faster 
