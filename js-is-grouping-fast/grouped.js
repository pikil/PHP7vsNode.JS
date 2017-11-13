var arr = [];
for (var i=1; i<50000; i++) {
  arr.push({
    id: 'String_' + i,
    price: i * 100,
    descr: 'Some descr ' + (i + 50),
    qty: i * 2
  });
}

console.time('test');

var new_arr = [];
for (var k in arr)
  if (arr.hasOwnProperty(k))
    new_arr[arr[k].id] = arr[k];

var v = null;
for (var i=1; i<2000; i+=2)
  v = new_arr['String_' + i];

console.timeEnd('test');
console.log(v);
console.log("JS Script finished...");
