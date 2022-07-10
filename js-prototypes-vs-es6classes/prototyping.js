function Car(make, model) {
  this.make = make
  this.model = model
  this.timesStarted = 0
}

Car.prototype.start = function () {
  this.timesStarted++
}

// inheritance
function SportsCar(make, model, turbocharged) {
  Car.call(this, make, model)
  this.turbocharged = turbocharged
  this.timesVroomed = 0
}

// actual inheritance logic
SportsCar.prototype = Object.create(Car.prototype);
SportsCar.prototype.constructor = SportsCar;

SportsCar.prototype.vroom = function () {
  this.timesVroomed++
}

// overriding the start method
SportsCar.prototype.start = function () {
  this.timesStarted++
  this.vroom()
}

console.time('test')

const arr = []

for (let i = 0; i < 500000; i++) {
  const car = (i % 2 === 0) ? new Car('Nissan', 'Sunny ' + i) : new SportsCar('Nissan', 'GTR ' + i, true)

  car.start()

  if (car.turbocharged)
    car.vroom()

  arr.push(car)
}

console.timeEnd('test')
// console.log(arr)
console.log("JS Script finished...")
