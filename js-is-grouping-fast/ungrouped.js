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

var v = null;
for (var i=1; i<2000; i+=2) {
  for (var k in arr) {
    if (arr.hasOwnProperty(k) && arr[k].id == 'String_' + i) {
      v = arr[k];
      break;
    }
  }
}

console.timeEnd('test');
console.log(v);
console.log("JS Script finished...");
