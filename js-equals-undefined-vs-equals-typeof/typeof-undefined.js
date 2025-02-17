const object = {}
const key = 'key_'

for (var i=1; i<=500000; i++) {
  object[key + i] = {
    id: 'id_' + i,
    price: i * 100,
    descr: 'Some descr ' + (i + 50),
    qty: i * 2
  }
}

console.time('test')

const arr = []

for (let i = 0; i < 500000; i++)
  arr.push(typeof object[key + i] === typeof undefined)

console.timeEnd('test')
// console.log(arr)
console.log("JS Script finished...")
