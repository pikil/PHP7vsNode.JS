var val = true;

console.time('test');

for (var i=1; i<=500000; i++)
  val = (true === val) ? false : true ;

console.timeEnd('test');

console.log(val);
console.log("JS Script finished...");
