/**
 * 자연수 n의 소인수 분해 결과를 담은 정수 배열을 반환한다.
 * 
 * @param n 소인수 분해할 자연수
 * @returns 소인수 분해 결과를 담은 정수 배열
 */
function factor(n: number): number[] {
    if (n === 1) return [1]; // n = 1인 경우는 예외로 한다.
    
    const ret: number[] = [];
    for (let div = 2; n > 1; ++div) {
        while (n % div === 0) {
            n /= div;
            ret.push(div);
        }
    }
    
    return ret;
}

// 사용 예시
const numbers = [1, 2, 6, 12, 20, 24, 36, 60, 100];
numbers.forEach(n => {
    const factors = factor(n);
    console.log(`${n} = ${factors.join(' × ')}`);
});

export default factor; 