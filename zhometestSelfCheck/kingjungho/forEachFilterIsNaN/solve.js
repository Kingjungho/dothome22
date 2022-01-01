// write your codes
// 유한수만 뽑는 isFinite 메서드를 사용.
const inputArray = [1, 40, "라매", "개발자", 51.5, "a", 88];

// write your codes

const solution = inputArray.filter((el) => isNaN(el) == false);
console.log(solution);

