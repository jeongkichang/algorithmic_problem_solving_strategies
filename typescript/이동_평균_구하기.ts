/**
 * 실수 배열 A가 주어질 때, 각 위치에서의 M-이동 평균 값을 구한다.
 * 
 * @param A 실수 배열
 * @param M 이동 평균의 윈도우 크기
 * @returns 이동 평균 값들의 배열
 */
function movingAverage(A: number[], M: number): number[] {
    const ret: number[] = [];
    const N = A.length;
    
    for (let i = M-1; i < N; ++i) {
        // A[i]까지의 이동 평균 값을 구하자.
        let partialSum = 0;
        for (let j = 0; j < M; ++j) {
            partialSum += A[i-j];
        }
        ret.push(partialSum / M);
    }
    
    return ret;
}

// 사용 예시
const arr = [1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0];
const m = 3;
const result = movingAverage(arr, m);

console.log("이동 평균 결과:");
console.log(result.map(val => val.toFixed(2)).join(" "));

export default movingAverage; 