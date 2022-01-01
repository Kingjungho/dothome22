// write your codes
const inputArray = [100, 10, 20, 40];
// use filter
const solution = inputArray.filter(el => el >= 40);
console.log(solution)

// use forEach
let result = [];
inputArray.forEach(el => {
  if(el >= 40){
    result.push(el);
  }
  return result;
})
console.log(result)
