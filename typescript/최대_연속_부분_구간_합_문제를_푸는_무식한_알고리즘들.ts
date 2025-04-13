/**
 * 최대 연속 부분 구간 합 문제를 푸는 무식한 알고리즘들
 */

// 최소 정수값 설정
const MIN = Number.MIN_SAFE_INTEGER;

/**
 * A의 연속된 부분 구간의 최대 합을 구한다. 시간 복잡도: O(N^3)
 * 
 * @param A 정수 배열
 * @returns 최대 합
 */
function inefficientMaxSum(A: number[]): number {
    const N = A.length;
    let ret = MIN;
    
    for (let i = 0; i < N; ++i) {
        for (let j = i; j < N; ++j) {
            // 구간 A[i..j]의 합을 구한다.
            let sum = 0;
            for (let k = i; k <= j; ++k) {
                sum += A[k];
            }
            ret = Math.max(ret, sum);
        }
    }
    
    return ret;
}

/**
 * A의 연속된 부분 구간의 최대 합을 구한다. 시간 복잡도: O(N^2)
 * 
 * @param A 정수 배열
 * @returns 최대 합
 */
function betterMaxSum(A: number[]): number {
    const N = A.length;
    let ret = MIN;
    
    for (let i = 0; i < N; ++i) {
        let sum = 0;
        for (let j = i; j < N; ++j) {
            // 구간 A[i..j]의 합을 구한다.
            sum += A[j];
            ret = Math.max(ret, sum);
        }
    }
    
    return ret;
}

// 사용 예시
const array = [-7, 4, -3, 6, 3, -8, 3, 4];
console.log(`원본 배열: ${array.join(", ")}`);
console.log(`inefficientMaxSum: ${inefficientMaxSum(array)}`);
console.log(`betterMaxSum: ${betterMaxSum(array)}`);

export { inefficientMaxSum, betterMaxSum }; 