# in_array() vs || vs && in PHP
## just checking if 'in_array' really faster

Getting three different runs in PHP for different types of data initialisation

#### Machine specification
* PHP v7.1.0
* 4GB RAM,
* Intel i3, 1.7 GHz

## and-and.php (3 parameters)
* 131.3ms
* 130.7ms
* 130.1ms
* 135.1ms
* 130.3ms
#### (Min: 130.1ms, Max: 135.1ms, Avg: 131.5ms)
##### 379.9ms (12 parameters)

## or-or.php (3 parameters)
* 123.9ms
* 125.9ms
* 129.9ms
* 130.7ms
* 127.5ms
#### (Min: 123.9ms, Max: 130.7ms, Avg: 127.6ms)
##### 396.5ms (12 parameters)

## in_array.php (3 parameters)
* 149.5ms
* 152.6ms
* 148.2ms
* 178.3ms
* 150.5ms
#### (Min: 148.2ms, Max: 178.3ms, Avg: 155.8ms)
##### 179.3ms (12 parameters)

Surprisingly, with small number of parameters , (&& .. &&) is about 10% faster, than in_array() and about %5 faster, than (|| .. ||)

#HOWEVER
With the increasing of the elements, in_array() function starts to work faster, than functions (&& .. &&) and (|| .. ||).
