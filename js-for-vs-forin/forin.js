var arr = [];
for (var i=1; i<=500000; i++) {
  arr.push({
    id: 'String_' + i,
    price: i * 100,
    descr: 'Some descr ' + (i + 50),
    qty: i * 2
  });
}

console.time('test');

var v = null;

for (var k in arr)
  v = arr[k];

console.timeEnd('test');
console.log(v);
console.log("JS Script finished...");
