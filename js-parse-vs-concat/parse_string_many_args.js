const arr = []

console.time('test');

for (var i=1; i<50000; i++)
  arr.push(`-${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}--${i}-${i}-${i}-`)

console.timeEnd('test');
// console.log(arr);
console.log("JS Script finished...");
