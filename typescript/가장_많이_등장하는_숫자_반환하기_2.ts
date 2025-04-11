/**
 * A의 각 원소가 0부터 100 사이의 값일 경우 가장 많이 등장하는 숫자를 반환한다.
 * 
 * @param A 정수 배열
 * @returns 가장 많이 등장하는 숫자
 */
function majority2(A: number[]): number {
    const N = A.length;
    const count: number[] = new Array(101).fill(0);
    
    for (let i = 0; i < N; ++i) {
        count[A[i]]++;
    }
    
    // 지금까지 확인한 숫자 중 빈도수가 제일 큰 것을 majority에 저장한다.
    let majority = 0;
    for (let i = 1; i <= 100; ++i) {
        if (count[i] > count[majority]) {
            majority = i;
        }
    }
    
    return majority;
}

// 사용 예시
const arr = [1, 2, 3, 1, 1, 2, 1];
const result = majority2(arr);
console.log(`가장 많이 등장하는 숫자: ${result}`);

export default majority2; 