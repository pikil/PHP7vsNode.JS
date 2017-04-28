var starttime = new Date().getTime();

var array = [3,4,1,3,5,1,92,2,4124,424,52,12],
sorted = false,
len = array.length - 1;

for (var j = 0; j < 100000; j++) {
	while (sorted === false) {
		sorted = true;

		for (var i = 0; i < len; i++) {
			var current = array[i],
			next = array[i+1];

			if (next < current) {
				array[i] = next;
				array[i+1] = current;

				sorted = false;
			}
		}
	}
}

console.log(array);
console.log('Node.js script (run2) took ' + (new Date().getTime() - starttime) + 'ms');
