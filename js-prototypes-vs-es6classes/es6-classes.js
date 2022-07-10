class Car {
  constructor (make, model) {
    this.make = make
    this.model = model
    this.timesStarted = 0
  }

  start () {
    this.timesStarted++
  }
}

class SportsCar extends Car {
  constructor (make, model, turbocharged) {
    super(make, model)

    this.turbocharged = turbocharged
    this.timesVroomed = 0
  }

  start () {
    this.timesStarted++
    this.vroom()
  }

  vroom () {
    this.timesVroomed++
  }
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
