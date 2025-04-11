/**
 * 주어진 배열에서 가장 많이 등장하는 숫자를 반환한다.
 * 만약 두 가지 이상 있을 경우 아무것이나 반환한다.
 * 
 * @param A 정수 배열
 * @returns 가장 많이 등장하는 숫자
 */
function majority(A: number[]): number {
    const N = A.length;
    let majority = -1;
    let majorityCount = 0;
    
    for (let i = 0; i < N; ++i) {
        // A에 등장하는 A[i]의 수를 센다.
        const V = A[i];
        let count = 0;
        
        for (let j = 0; j < N; ++j) {
            if (A[j] === V) {
                ++count;
            }
        }
        
        // 지금까지 본 최대 빈도보다 많이 출현했다면 답을 갱신한다.
        if (count > majorityCount) {
            majorityCount = count;
            majority = V;
        }
    }
    
    return majority;
}

// 사용 예시
const arr = [1, 2, 3, 1, 1, 2, 1];
const result = majority(arr);
console.log(`가장 많이 등장하는 숫자: ${result}`);

export default majority; 